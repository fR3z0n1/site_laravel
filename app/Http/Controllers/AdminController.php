<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Timeline;
use App\Models\Image;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public function getAll() {
        
        $news = Timeline::all();
        $images = Image::all();
        return view('admin.admin-panel', ['news' => $news, 'images' => $images]);
    }

    public function addNews(AdminRequest $data) {

        $path_img = 'img/' . $data->file('img_new')->store('img_news', 'mydisk');

        $new = new Timeline();
        $new->title = $data->title_new; 
        $new->preview_text= $data->preview_new; 
        $new->text = $data->text_new;
        $new->path_img = $path_img;
        $new->save();
        
        return redirect()->route('admin-panel')->with('success','Новость успешно добавлена');
    }

    public function addImg(Request $data) {

        $path = $data->file('img_new')->store('img_gallery', 'mydisk');
        $path_img = 'img/' . $path;
        $name = trim(stristr($path, '/', false), '/');
        $img = new Image();
        $img->name = $name;
        $img->path = $path_img;
        $img->save();
        
        return redirect()->route('admin-panel')->with('success','Картинка в галерею успешно добавлена');
    }
    public function deleteNews() {
        
    }
    public function deleteImg() {
        
    }
}
