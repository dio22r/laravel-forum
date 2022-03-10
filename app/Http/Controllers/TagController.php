<?php

namespace App\Http\Controllers;

use App\Models\MhForumTag;
use App\Models\MhForumTopic;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $listTag = MhForumTag::withCount("MhForumTopic")
            ->orderBy("title", "asc")
            ->filters(request(["search"]))
            ->paginate(15);

        return view("pages.tag.index", [
            "listTag" => $listTag
        ]);
    }

    public function show(Request $request, String $slug)
    {
        $tag = MhForumTag::withCount("MhForumTopic")
            ->where("slug", "=", $slug)
            ->first();

        if (!$tag) abort(404);

        $forums = MhForumTopic::with("User")
            ->where("mh_forum_tag_id", "=", $tag->id)
            ->orderBy("created_at", "desc")
            ->paginate(20);

        return view("pages.tag.detail", [
            "tag" => $tag,
            "forums" => $forums
        ]);
    }
}
