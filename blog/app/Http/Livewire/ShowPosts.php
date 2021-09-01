<?php
//namespace Illuminate\Database\Eloquent\Collection;

namespace App\Http\Livewire;

use App\Models\Post;
use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;
    // public $posts;
    public $type;
    public $title, $body, $post_id, $user_id, $current_id;

    public $updateMode = false;

    public function render()
    {
        //'posts' = Post::all()->paginate(5);
        // $this->current_id = "dddd";
        return view('livewire.show-posts', [

            'posts' => Post::orderBy('id', 'desc')->paginate(2)]);

    }
    public function mount()
    {
        $this->current_id = "From Mount";
        //$this->user_id = "hey";
        $this->user_id = Auth::User()->id;

        // $this->user_id = Auth::User()->id;
    }

    private function resetInputFields()
    {

        $this->title = '';

        $this->body = '';

    }

    public function store()
    {
        // $this->user_id = 'sdfasdf';
        $validatedDate = $this->validate([

            'title' => 'required',

            'body' => 'required',

            'user_id' => 'required',

        ]);

        //dd($validatedDate);

        Post::create($validatedDate);

        session()->flash('message', 'Post Created Successfully.');

        $this->resetInputFields();

        $this->emit('postStore'); // Close model to using to jquery

    }

    public function edit($id)
    {

        $this->updateMode = true;

        $user = User::where('id', $id)->first();

        $this->user_id = $id;

        $this->name = $user->name;

        $this->email = $user->email;

    }

    public function cancel()
    {

        $this->updateMode = false;

        $this->resetInputFields();

    }

    public function update()
    {

        $validatedDate = $this->validate([

            'name' => 'required',

            'email' => 'required|email',

        ]);

        if ($this->user_id) {

            $user = User::find($this->user_id);

            $user->update([

                'name' => $this->name,

                'email' => $this->email,

            ]);

            $this->updateMode = false;

            session()->flash('message', 'Users Updated Successfully.');

            $this->resetInputFields();

        }

    }

    public function delete($id)
    {

        if ($id) {

            User::where('id', $id)->delete();

            session()->flash('message', 'Users Deleted Successfully.');

        }

    }

}
