<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        ブログ編集画面
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        

        <title>Blog</title>

        <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
       
       
    </head>
    <body class="antialiased">
       <h1 class='title'>編集画面</h1>
       <div class='content'>
         <form action="/posts/{{$post->id}}" method="POST">
             @csrf
             @method('PUT')
         <div class="title">
             <h2>Title</h2>
         <input type="text" name='post[title]' value="{{$post->title }}">
         <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
         <div class="body">
             <h2>body</h2>
         <textarea name='post[body]'>{{$post->body}}</textarea>
         <p class="title_error" style="color:red">{{$errors->first('post.body') }}</p>
         </div>
          <input type="submit" value="update">
         </form>
          
    
<div class="footer">
            <a href="/">back</a>
        </div>
    </body>
      </x-app-layout>
</html>
