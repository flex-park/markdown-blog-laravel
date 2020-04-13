@extends('layouts.app')

@section('content')
<main class="text-gray-800 px-8 md:w-2/3 lg:w-3/5 xl:w-1/2 sm:w-full mx-auto">
  <div class="text-center">
    <h1 class="text-center text-3xl my-8">Articles</h1>
    <a class="my-3 hover:underline" href="{{route('articles.create')}}">New article</a>
  </div>

    @foreach ($articles as $article)
      <section class="border-b">
        <h2 class="text-3xl font-bold text-center mt-4 hover:underline"><a href="{{Route('articles.show', $article->slug)}}">{{$article->title}}</a></h2>
        <p class="text-sm text-center leading-5 text-gray-700 mt-3">Posted {{\Carbon\Carbon::parse($article->updated_at)->format('d/m/Y')}}</p>
        <article class="markdown-body">
        {!! $article->summary_html!!}
          <div class="text-right mt-8">
            <a href="{{Route('articles.show', $article->slug)}}" role="button" class="px-4 py-2 border border-gray-300 rounded bg-white text-sm font-medium text-gray-700 hover:border-gray-500 focus:z-10 focus:outline-none focus:border-gray-300 focus:shadow-outline-gray active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
              Read more
            </a>
          </div>
        </article>
      </section>
    @endforeach
@endsection
