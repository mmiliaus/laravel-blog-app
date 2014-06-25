<?php

class PostController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $post = new Post;

        return View::make('post.create', array('post' => $post));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $newPost = [
            'title' => Input::get('title'),
            'body' => Input::get('body')
        ];

        $validator = Validator::make(
            $newPost,
            [
                'title' => ['required', 'max:255'],
                'body' => ['required']
            ]
        );

        if ($validator->fails()) {
            return Redirect::to('post/create')->withInput()->withErrors($validator);
//            return View::make('post.create', array('post' => $post, 'validator' => $validator));
        } else {
            $post = new Post($newPost);
            $post->save();

            return Redirect::to('post')->with('success', 'Post has been successfully created.');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
