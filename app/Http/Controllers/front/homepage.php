<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\articles;
use App\Models\lang;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Likes;
use App\Models\Author;
use App\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use App;
use DB;


class homepage extends Controller
{
   public function __construct(){
	view()->share('articles',articles::all());
	view()->share('categories',Category::all());
	view()->share('pages',Page::all());
	view()->share('sliders',Slider::all());
	view()->share('authors',Author::all());
	view()->share('recentPosts', articles::orderBy( 'created_at', 'DESC' )->limit(3)->get());
	session()->put('locale', 'az');  
   }
	
	public function lang($lang){
		session()->put('locale', $lang);  
		$segments = str_replace(url('/'), '', url()->previous());
		$segments = array_filter(explode('/', $segments));
		array_shift($segments);
		array_unshift($segments, $lang);
		return redirect()->to(implode('/', $segments));
	}

	public function locale(){
		$locales= lang::get()->pluck('code');
		foreach ($locales as  $code) {
			$arr[]= $code;
	    }
    //   if(session()->get('locale')== "" or !in_array(session()->get('locale'),$arr)){
    //     session()->put('locale', 'az');  
	// 	}
	  App::setLocale(session()->get('locale'));
      return redirect(session('locale'));
	}
   
	
	public function show(Request $request){
		App::setLocale(session()->get('locale'));
		$categories=Category::get();
		$sliderArticles=articles::where('status','active')->orderBy('hit','DESC')->limit(3)->get();
        $articles=articles::where('status','active')->orderBy('created_at','DESC')->paginate(4);
		$pages=Page::get();
		$recentPosts =articles::orderBy( 'created_at', 'DESC' )->limit(3)->get();
		$sliders = articles::where('status','active')->orderBy('hit','DESC')->limit(3)->get();
		$slides=Slider::all();
		
		return view('front.homepage',compact('articles','categories','pages','recentPosts','sliders','slides','sliderArticles'));

	}
	


	public function singlePage($locale,$category,$slug){
		App::setLocale(session()->get('locale'));
		$category=Category::whereSlug($category)->first() ?? abort(403,'Sehife Movcud Deyil');
		$singlePage=articles::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'Sehife Movcud Deyil');
		$singlePage->increment('hit');
		$comments=Comment::whereCommentId($singlePage->id)->get();
		return view('front.singlePage',compact('singlePage','comments'));
	}


	public function categoryPage($locale,$category){
		App::setLocale(session()->get('locale'));
		$categories=Category::whereSlug($category)->first() ?? abort(403,'Bele Sehife Movcud Deyil');
		$categoryArticles=articles::whereCategoryId($categories->id)->paginate(8);
		return view('front.category',compact('categoryArticles','categories'));
	}


	public function comment(Request $request,$locale,$category,$slug){
		$comment=new Comment;
		$category=Category::whereSlug($category)->first() ?? abort(403,'Sehife Movcud Deyil');
		$singlePage=articles::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'Sehife Movcud Deyil');
		$comment->comment_id=$singlePage->id;
		$comment->name=Auth::user()->name;
		$comment->email=Auth::user()->email;
		$comment->author_photo=Auth::user()->profile_photo_path;
		$comment->comment=$request->comment;
		$comment->save();
		return redirect()->back();
	}

	public function like(Request $request,$locale){
		$likes=Likes::get()->pluck('user_id');
		$post_id=Likes::get()->pluck('like_id');
		foreach($likes as $l){
			$array[]=$l;
		}
		foreach($post_id as $p){
			$arr[]=$p;
		}
		if(isset($array,$arr)){
			if(in_array(Auth::user()->id,$array) && in_array($request->msg,$arr)){
				Likes::where('user_id',Auth::user()->id and 'like_id',$request->msg)->delete();
				return response()->json(['success'=>'sil']);	
			}
		}
			$like=new Likes;
			$like->user_id=Auth::user()->id;
			$like->name=Auth::user()->name;
			$like->like_id=$request->msg;
			$like->save();
			$viewLike=redirect()->back()->with('like','beyen');
			return response()->json(['success'=>'beyen']);
	}

	
	public function page(){
		App::setLocale(session()->get('locale'));
		$page=Page::whereSlug('page')->first();
		return view('front.page',compact('page'));
	}
	public function about(){
		App::setLocale(session()->get('locale'));
		$about=Page::whereSlug('about')->first();
		$authors=Author::all();
		return view('front.about',compact('about','authors'));
	}
	public function style(){
		App::setLocale(session()->get('locale'));
		$style=Page::whereSlug('style-guide')->first();
		return view('front.style',compact('style'));
	}
	public function search(Request $request){
		App::setLocale(session()->get('locale'));
		$search=Page::whereSlug('search')->first();
		$term = $request->input('term');
		$project = articles::query()
			->where('title', 'LIKE', "%{$term}%")
			->orWhere('slug', 'LIKE', "%{$term}%")
			->paginate(2);
		return view('front.searchpage',compact('project','search'));
	}


	public function contact($slug){
		App::setLocale(session()->get('locale'));
		$contact=Page::whereSlug('contact')->first();
		return view('front.contact',compact('contact'));
	}

	public function contactPost(Request $request){
		$contact = new Contact;
		$contact->name=Auth::user()->name;
		$contact->email=Auth::user()->email;
		$contact->author_image=Auth::user()->profile_photo_path;
		$contact->message=$request->message;
		$contact->save();

		$details = [
			'title' =>'message from user',
			'from'=>Auth::user()->email,
            'subject' => $request->message,];
        // Mail::to('orxan6514@gmail.com')->send(new Mailer($details));
       return redirect()->back();

		
	}

	
}
