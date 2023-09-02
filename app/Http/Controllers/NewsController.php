<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('admin.news.form', ['data' => null]);
    }

    public function store(NewsRequest $request)
    {
        $news = new News();
        $news->fill($request->validated());
        $news->is_featured = $request->is_featured;
        $news->save();
        return redirect()->route('listNews')
            ->with('success', 'Thêm mới thành công.');
    }

    public function list(Request $request)
    {
        $queryBuilder = News::query();
        $search = $request->get('search');
        $sort = (int) $request->get('sort');
        $type = (int) $request->get('type');
        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('title', 'like', '%' . $search . '%')
            ->orWhere('content', 'like', '%' . $search . '%')
                ->orWhere('author', 'like', '%' . $search . '%')
                ->orWhere('author_slogan', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if ($type === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($type === 2) {
            $queryBuilder = $queryBuilder->orderBy('view', 'DESC');
        }
        if ($type === 3) {
            $queryBuilder = $queryBuilder->where('is_featured', 1);
        }
        $data = $queryBuilder->orderBy('created_at','DESC')->paginate(10)->appends(['search' => $search, 'sort' => $sort, 'type' => $type]);
        return view('admin.news.table', [
            'news' => $data,
            'sort' => $sort,
            'type' => $type
        ]);

    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.form', ['data' => $news]);
    }

    public function save(NewsRequest $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request['content'];
        $news->images = $request->images;
        $news->author = $request->author;
        $news->author_slogan = $request->author_slogan;
        $news->is_featured = $request->is_featured;
        $news->update();
        return redirect()->route('listNews')->with('success', 'Update thành công.');
    }

    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('listNews')
            ->with('success', 'Xoá thành công.');
    }


    public function listClient(Request $request)
    {
        $news = News::query();
        $search = $request->get('search');
        if ($search || strlen($search) > 0) {
            $news = $news->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%')
                ->orWhere('author', 'like', '%' . $search . '%')
                ->orWhere('author_slogan', 'like', '%' . $search . '%');
        }
        $data = $news->orderBy('created_at','DESC')->paginate(6)->appends(['search' => $search]);
        $latest = $news->orderBy('created_at', 'DESC')->take(3)->get();
        $popular = $news->orderBy('view', 'DESC')->take(3)->get();
        $featured = $news->where('is_featured', 1)->take(3)->get();

        return view('clients.news', [
            'news' => $data,
            'latest' => $latest,
            'popular' => $popular,
            'featured' => $featured,
        ]);

    }

    public function detailClient($id) {
        $news = News::query();
        $data = News::find($id);
        $latest = $news->orderBy('created_at', 'DESC')->take(3)->get();
        $popular = $news->orderBy('view', 'DESC')->take(3)->get();
        $featured = $news->where('is_featured', 1)->take(3)->get();

        return view('clients.news-detail', [
            'data' => $data,
            'latest' => $latest,
            'popular' => $popular,
            'featured' => $featured,
        ]);
    }

    public function view($id) {
        $news = News::find($id);
        $news->view += 1;
        $news->save();
        return $news->view;
    }
}
