<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Returns all posts.
     *
     * @return mixed
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Returns a single posted based on the id in the parameter.
     *
     * @param Post $post
     *
     * @return Post
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Returns the created post with a 201 status code.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return response()->json($post, 201);
    }

    /**
     * Returns the updated post with the default 200 status code.
     *
     * @param Request $request
     * @param Post $post
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return response()->json($post);
    }

    /**
     * Returns null with a 204 status code.
     *
     * @param Post $post
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delete(Post $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }
}
