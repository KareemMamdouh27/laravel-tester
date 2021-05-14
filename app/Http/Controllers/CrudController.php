<?php 
namespace App\Http\Controllers; 

use App\Models\Offer;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Requests\offerRequest;
use LaravelLocalization;
use App\Traits\OfferTrait;

class CrudController extends Controller
{
    use OfferTrait;
    public function getRules()
    {
        return $rules = [
            'name'  => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',
        ];   
    }

    public function getMessages()
    {
        return $messages = [                
            'name.required' => 'el esm mtlob ya shaba7',
            'price.numeric' => 'ektb arkam yalla',
        ];   
    }

    public function getOffer()
    {
        return Offer::get();
    }

    public function create()
    {
        return view('offers.create');
    }

    public function store(offerRequest $request){
        // Validating data

        $rules = $this->getRules();
        $messages = $this->getMessages();

        $validator = Validator::make($request->all() ,$rules, $messages);

        if($validator -> fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        };

        $file_name = $this->saveImage($request->photo, 'images/offers');

        // Creating Offer 

        Offer::create([
            'name' => $request -> name,
            'price'=> $request -> price,
            'details' => $request -> details,
        ]);

        return redirect()->back()->with(['success' => 'added successfully']);
    }
} 
