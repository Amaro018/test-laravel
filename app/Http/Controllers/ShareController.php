<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function store()
    {
        // this is the longest way to define it
        // $share = new Idea([
        //     'content'=>request()->get('share-content',''),
        // ]);
        // $share->save();
        // dd(request()->all());

        $validated = request()->validate([
            'content' => 'required|min:5|max:200',
        ]);

        $validated['user_id'] = auth()->user()->id;

        Idea::create($validated);


        return redirect()->route('homepage')->with('success', 'shared successfully');

    }

    public function destroy(Idea $idea)
    {
        if (auth()->user()->id != $idea->user_id) {
            abort(404, 'id not equal');
        }
        $idea->delete();


        return redirect()->route('homepage')->with('success', 'deleted successfully');
    }

    public function show(Idea $idea)
    {

        return view('shared.showSharedpost', [
            'idea' => $idea,
        ]);
    }

    public function edit(Idea $idea)
    {
        if (auth()->user()->id != $idea->user_id) {
            abort(404, 'id not equal');
        }
        $editing = true;

        return view('shared.editSharedpost', compact('idea', 'editing'));
    }

    public function update(Idea $idea)
    {

        // $validated = request()->validate([
        //     'content' => 'required|min:5|max:200',
        // ]);

        // $idea->update($validated);

        // we can also use it like 
        if (auth()->user()->id != $idea->user_id) {
            abort(404, 'id not equal');
        }
        request()->validate([
            'share-content' => 'required|min:5|max:200',
        ]);

        $idea->content = request('share-content', '');
        $idea->save();


        return redirect()->route('homepage', $idea->id)->with('success', 'edit successfully');

    }

}
