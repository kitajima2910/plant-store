<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Http\Requests\AdminFormSlider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\StorageImageTraits;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    use StorageImageTraits;
    private $slider;

    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
     
    }

   public function index(){
       $sliders = Slider::all();
        return view('pages.admin.sliders.index',compact('sliders'));
   }

   public function create(){
       return view('pages.admin.sliders.create');
   }

   public function store(AdminFormSlider $request){
        $sliderInsert = [
            // 'link' => $request->get('link'),
            'link' =>  Str::of($request->get('link'))->slug('-') .'.html',
            'content' => $request->get('content'),
            'status' => $request->get('status'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $data = $this->uploadTrait($request, 'feature_image_path', 'sliders');

            if (!empty($data)) {
                $sliderInsert['feature_image_name'] = $data['file_name'];
                $sliderInsert['feature_image_path'] = $data['file_path'];
            }
   
            $slider = $this->slider->create($sliderInsert);
        
            return redirect()->route('sliders.index');
   }


    public function destroy($id) {
        // $slider->delete();
        // return redirect()->route('sliders.index');

        $slider = $this->slider->find($id);
        $pathDelete[] = $slider->feature_image_path;
    

        if (!empty($pathDelete)) {
            foreach ($pathDelete as $item) {
                $this->unlinkImages($item);
            }
        }

        $this->slider->find($id)->delete();
        return redirect()->back();
    }

    public function edit(Slider $slider){
        return view('pages.admin.sliders.edit',compact('slider'));
    }

    public function update(AdminFormSlider $request,$id){
        $sliderUpdate = [
            // 'link' => $request->get('link'),
            'link' =>  Str::of($request->get('link'))->slug('-') .'.html',
            'content' => $request->get('content'),
            'status' => $request->get('status'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $savePath1 = $this->slider->find($id)->feature_image_path;

        
        $data = $this->uploadTrait($request, 'feature_image_path', 'sliders');

        if (!empty($data)) {
            $sliderUpdate['feature_image_name'] = $data['file_name'];
            $sliderUpdate['feature_image_path'] = $data['file_path'];
        }
        
    

        $this->slider->find($id)->update($sliderUpdate);
        $savePath2 = $this->slider->find($id)->feature_image_path;

        if($savePath2 !== $savePath1) {
            $this->unlinkImages($savePath1);
        }

        return redirect()->route('sliders.index');
    
    }
}
