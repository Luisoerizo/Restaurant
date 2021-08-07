<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Reservation;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Reservaciones de los últimos 7 días
        $lastWeekReservations = Reservation::select(DB::raw('count(id) as total'))           
        ->where("created_at",">", Carbon::now()->subWeek())->get();

        //Posts publicados los últimos 30 días 
        $lastMonthPosts = Post::select(DB::raw('count(id) as total'))           
        ->where("created_at",">", Carbon::now()->subWeek())
        ->where('status','=','2')
        ->get();

        //Últimos 5 posts publicados
        $lastFourPosts = Post::where('status','2')
                            ->latest('id')->take(5)->get();

        //Etiquetas totales
        $tags = Tag::select(DB::raw('count(id) as total'))->get();           

        //Categorías totales
        $categories = Category::select(DB::raw('count(id) as total'))->get();           

        //Posts Totales
        $posts = Post::select(DB::raw('count(id) as total'))->get();         
        
        //Reservaciones totales
        $reservations = Reservation::select(DB::raw('count(id) as total'))->get();           

        return view('admin.index',compact('lastWeekReservations','lastMonthPosts','lastFourPosts','tags','categories','posts','reservations'));
    }

    public function chart()
    {
         //Posts filtrados para el chart        
         $data = Post::select('status',DB::raw('count(id) as total'))->groupBy('status')->get();

         return json_encode($data);
    }

}
