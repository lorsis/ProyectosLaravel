<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|min:5',
            'contenido' => 'required|min:50',
        ];
    }
    
    public function messages()
    {
        return [
            'titulo.required' => 'El título es obligatorio.',
            'titulo.min' => 'El título debe tener al menos 5 caracteres.',

            'contenido.required' => 'El contenido es obligatorio.',
            'contenido.min' => 'El contenido debe tener al menos 50 caracteres.',
        ];
    }
    public function edit(Post $post)
{
    if (Auth::user()->rol !== 'admin' && Auth::id() !== $post->user_id) {
        return redirect()->route('posts.index');
    }

    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
    if (Auth::user()->rol !== 'admin' && Auth::id() !== $post->user_id) {
        return redirect()->route('posts.index');
    }

    $post->update($request->all());
    return redirect()->route('posts.index');
}

public function destroy(Post $post)
{
    if (Auth::user()->rol !== 'admin' && Auth::id() !== $post->user_id) {
        return redirect()->route('posts.index');
    }

    $post->delete();
    return redirect()->route('posts.index');
}

}
