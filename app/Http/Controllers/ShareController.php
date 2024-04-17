<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function store()
    {
        // $share = new Idea([
        //     'content'=>request()->get('share-content',''),
        // ]);
        // $share->save();

        request()->validate([
            'share-content' => 'required|min:5|max:200',
        ]);

        $share = Idea::create(
            [
                'content' => request()->get('share-content', ''),
            ]
        );

        return redirect()->route('homepage')->with('success', 'shared successfully');

    }

    public function destroy(Idea $idea)
    {
        $idea->delete();


        return redirect()->route('homepage')->with('success', 'deleted successfully');
    }

    public function show(Idea $idea)
    {
        return view('showSharedpost', [
            'idea' => $idea,
        ]);
    }

    public function edit(Idea $idea)
    {
        $editing = true;

        return view('editSharedpost', compact('idea', 'editing'));
    }

    public function update(Idea $idea)
    {

        request()->validate([
            'share-content' => 'required|min:5|max:200',
        ]);

        $idea->content = request('share-content', '');
        $idea->save();


        return redirect()->route('showSharedpost.show', $idea->id)->with('success', 'edit successfully');

    }

}
