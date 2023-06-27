<?php

namespace App\Http\Controllers;

use App\Models\HomeFirstSection;
use App\Models\HomeSecondSection;
use App\Models\HomeThirdSection;
use App\Models\HomeFourthSection;
use App\Models\HomeFifthSection;
use App\Models\HomeSixthSection;
//
use App\Models\PcoCarsFirstSection;
use App\Models\PcoCarsSecondSection;
use App\Models\PcoCarsThirdSection;
use App\Models\PcoCarsAboutSection;
use App\Models\PcoCarssContactSection;
use App\Models\PcoCarsFeatureSection;
//
use App\Models\HelpFirstSection;
use App\Models\HelpSecondSection;
//
use App\Models\ApplyFirstSection;
use App\Models\ApplySecondSection;
//
use App\Models\FooterAboutSection;
use App\Models\FooterContactSection;
use App\Models\FooterNewsletterSection;
use App\Models\FooterFollowUsSection;
use App\Models\FooterCopyrightSection;
use App\Models\PcoCarsImages;
use App\Models\PcoCarsThirdSectionHead;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminAdd extends Controller
{
    // for home
    // first section
    public function addFirstSection()
    {
        return view("admin.home.firstsection");
    }
    public function  submitFirstSection(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'description' => 'required',
        ]);

        $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $homeFirstSection = new HomeFirstSection;
        $homeFirstSection->title = $request->title;
        $homeFirstSection->description = $request->description;
        $homeFirstSection->image = $imageName;
        $homeFirstSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }

    // second section
    public function addSecondSection()
    {
        return view("admin.home.secondsection");
    }
    public function submitSecondSection(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image1' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'image2' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'image3' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'image4' => 'required|mimes:png,jpg,jpeg|max:5000000',
        ]);

        $imageName1 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image1->extension();
        $request->image1->move(public_path('uploads'), $imageName1);

        $imageName2 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image2->extension();
        $request->image2->move(public_path('uploads'), $imageName2);

        $imageName3 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image3->extension();
        $request->image3->move(public_path('uploads'), $imageName3);

        $imageName4 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image4->extension();
        $request->image4->move(public_path('uploads'), $imageName4);

        $homeSecondSection = new HomeSecondSection;
        $homeSecondSection->title = $request->title;
        $homeSecondSection->image1 = $imageName1;
        $homeSecondSection->image2 = $imageName2;
        $homeSecondSection->image3 = $imageName3;
        $homeSecondSection->image4 = $imageName4;
        $homeSecondSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }

    // third section
    public function addThirdSection()
    {
        return view("admin.home.thirdsection");
    }
    public function submitThirdSection(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'description' => 'required',
        ]);

        $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $homeThirdSection = new HomeThirdSection;
        $homeThirdSection->title = $request->title;
        $homeThirdSection->description = $request->description;
        $homeThirdSection->image = $imageName;
        $homeThirdSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }

    // fourth section
    public function addFourthSection()
    {
        return view("admin.home.fourthsection");
    }
    public function submitFourthSection(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'images' => 'required|array',
            'images.*' => 'required|file|mimes:jpeg,jpg,png|max:5000000',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        // $request->validate([
        //     'images.*' => 'required|image|mimes:jpeg|max:5000000',
        // ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $image->extension();
                $image->move(public_path('uploads'), $imageName);

                $homeFourthSection = new HomeFourthSection;
                $homeFourthSection->image = $imageName;
                $homeFourthSection->save();
            }
        }

        return back()->withSuccess('Images Uploaded Successfully');
    }


    // fifth section
    public function addFifthSection()
    {
        return view("admin.home.fifthsection");
    }
    public function submitFifthSection(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image1' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'image2' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'image3' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
        ]);

        $imageName1 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image1->extension();
        $request->image1->move(public_path('uploads'), $imageName1);

        $imageName2 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image2->extension();
        $request->image2->move(public_path('uploads'), $imageName2);

        $imageName3 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image3->extension();
        $request->image3->move(public_path('uploads'), $imageName3);

        $homeFifthSection = new HomeFifthSection;
        $homeFifthSection->title = $request->title;
        $homeFifthSection->image1 = $imageName1;
        $homeFifthSection->image2 = $imageName2;
        $homeFifthSection->image3 = $imageName3;
        $homeFifthSection->description1 = $request->description1;
        $homeFifthSection->description2 = $request->description2;
        $homeFifthSection->description3 = $request->description3;
        $homeFifthSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }


    // sixth section
    public function addSixthSection()
    {
        return view("admin.home.sixthsection");
    }
    public function submitSixthSection(Request $request)
    {
        $request->validate([
            'left_text' => 'required',
            'left_button_text' => 'required',
            'left_image' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'right_image' => 'required|mimes:png,jpg,jpeg|max:5000000',
        ]);

        $imageName1 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->left_image->extension();
        $request->left_image->move(public_path('uploads'), $imageName1);

        $imageName2 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->right_image->extension();
        $request->right_image->move(public_path('uploads'), $imageName2);

        $homeSixthSection = new HomeSixthSection;
        $homeSixthSection->left_text = $request->left_text;
        $homeSixthSection->left_button_text = $request->left_button_text;
        $homeSixthSection->left_image = $imageName1;
        $homeSixthSection->right_image = $imageName2;
        $homeSixthSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }
    // end home

    // for pco cars
    // first section
    public function addpcocarsFirstSection()
    {
        return view("admin.pcocars.firstsection");
    }
    public function  submitpcocarsFirstSection(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'description' => 'required',
        ]);

        $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $pcocarsFirstSection = new PcoCarsFirstSection;
        $pcocarsFirstSection->title = $request->title;
        $pcocarsFirstSection->description = $request->description;
        $pcocarsFirstSection->image = $imageName;
        $pcocarsFirstSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }

    // second section
    public function addpcocarsSecondsection()
    {
        return view("admin.pcocars.secondsection");
    }
    public function  submitpcocarsSecondSection(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:png,jpg,jpeg|max:5000000',
            'car_name' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'days_limit' => 'required',
            'car_type' => 'required',
            'year' => 'required',
            'mileage' => 'required',
            'fuel_type' => 'required',
            'gear_box' => 'required',
            'doors' => 'required',
            'seats' => 'required',
            'engine_size' => 'required',
            'body_type' => 'required',
            'colour' => 'required',
            'othercarimages' => 'required|array',
            'othercarimages.*' => 'required|file|mimes:jpeg,jpg,png|max:5000000',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $random = substr(md5(mt_rand()), 0, 7);
        $code = $request->car_name . $random;

        $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $pcocarsSecondSection = new PcoCarsSecondSection;
        $pcocarsSecondSection->image = $imageName;
        $pcocarsSecondSection->car_name = $request->car_name;
        $pcocarsSecondSection->condition = $request->condition;
        $pcocarsSecondSection->price = $request->price;
        $pcocarsSecondSection->days_limit = $request->days_limit;
        $pcocarsSecondSection->car_type = $request->car_type;
        $pcocarsSecondSection->year = $request->year;
        $pcocarsSecondSection->mileage = $request->mileage;
        $pcocarsSecondSection->fuel_type = $request->fuel_type;
        $pcocarsSecondSection->gear_box = $request->gear_box;
        $pcocarsSecondSection->doors = $request->doors;
        $pcocarsSecondSection->seats = $request->seats;
        $pcocarsSecondSection->engine_size = $request->engine_size;
        $pcocarsSecondSection->body_type = $request->body_type;
        $pcocarsSecondSection->colour = $request->colour;
        $pcocarsSecondSection->car_code = $code;
        $pcocarsSecondSection->save();
        $last_inserted_id = $pcocarsSecondSection->id;
        if ($request->hasFile('othercarimages')) {
            foreach ($request->file('othercarimages') as $images) {
                $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $images->extension();
                $images->move(public_path('uploads'), $imageName);

                $PcoCarsImages = new PcoCarsImages();
                $PcoCarsImages->car_image = $imageName;
                $PcoCarsImages->pco_cars_id = $last_inserted_id;
                $PcoCarsImages->save();
            }
        }

        return back()->withSuccess('Section Data Added Successfully');
    }

    // third section
    public function addpcocarsThirdsection()
    {
        return view("admin.pcocars.thirdsection");
    }

    public function  submitpcocarsThirdsectionHead(Request $request)
    {
        $request->validate([
            'section_title' => 'required',
            'title_of_text' => 'required',
        ]);

        $homeThirdSectionhead = new PcoCarsThirdSectionHead();
        $homeThirdSectionhead->title = $request->section_title;
        $homeThirdSectionhead->title_of_text = $request->title_of_text;

        $homeThirdSectionhead->save();
        return back()->withSuccess('Section Data Added Successfully');
    }

    public function  submitpcocarsThirdsection(Request $request)
    {   
        $images = $request->img;
        $titles = $request->title;
        $descriptions = $request->description;

        foreach ($titles as $index => $title) {
            $description = $descriptions[$index];
            $image = $images[$index];
            
            $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $image->extension();
            $image->move(public_path('uploads'), $imageName);

            $homeThirdSection = new PcoCarsThirdSection;
            $homeThirdSection->image = $imageName;
            $homeThirdSection->title = $title;
            $homeThirdSection->description = $description;
            $homeThirdSection->save();
        }
        
        return back()->withSuccess('Section Data Added Successfully');
    }

    // about section
    public function addpcocardetailsaboutsection()
    {
        $pcocars = PcoCarsSecondSection::get();
        return view("admin.pcocars.aboutsection",['pcocars' => $pcocars]);
    }
    public function submitpcocardetailsaboutsection(Request $request)
    {
        $request->validate([
            'about' => 'required',
            'car' => 'required'
        ], [
            'car.required' => 'Please select a car.'
        ]);

        $pcocarsAboutSection = new PcoCarsAboutSection;
        $pcocarsAboutSection->about = $request->about;
        $pcocarsAboutSection->pco_cars_id = $request->car;
        $pcocarsAboutSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }

    // features section
    public function addpcocardetailsfeaturesection()
    {
        $pcocars = PcoCarsSecondSection::get();
        return view("admin.pcocars.featuresection",['pcocars' => $pcocars]);
    }
    public function  submitpcocarsfeaturesection(Request $request)
    {
        $pcocarfeatureSection = new PcoCarsFeatureSection;
        $feat = $request->features; // Assuming $feat is an array
        $car = $request->car;

        foreach ($feat as $value) {
            $pcocarfeatureSection->feature = $value;
            $pcocarfeatureSection->pco_cars_id = $car;
            $pcocarfeatureSection->save();
            $pcocarfeatureSection = new PcoCarsFeatureSection; // Create a new instance for the next iteration
        }

        return back()->withSuccess('Features Data Added Successfully');
    }

    // contact section
    public function addpcocardetailscontactsection()
    {
        return view("admin.pcocars.contactsection");
    }
    public function submitpcocardetailscontactsection(Request $request)
    {
        $request->validate([
            'callnow' => 'required',
            'address' => 'required',
            'number' => 'required',
        ]);

        $pcocarsAboutSection = new PcoCarssContactSection;
        $pcocarsAboutSection->text = $request->callnow;
        $pcocarsAboutSection->address = $request->address;
        $pcocarsAboutSection->number = $request->number;
        $pcocarsAboutSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }

    // help section
    public function addhelpsection()
    {
        return view("admin.help.firstsection");
    }
    public function submithelpsection1(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'titletext' => 'required',
        ]);

        $HelpFirstSection = new HelpFirstSection;
        $HelpFirstSection->title = $request->title;
        $HelpFirstSection->text = $request->titletext;
        $HelpFirstSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }
    public function submithelpsection2(Request $request)
    {
        $questions = $request->question;
        $answers = $request->answer;

        foreach ($questions as $index => $question) {
            $answer = $answers[$index];

            $helpSection = new HelpSecondSection;
            $helpSection->question = $question;
            $helpSection->answer = $answer;
            $helpSection->save();
        }

        return back()->withSuccess('Features Data Added Successfully');
    }

    // apply page
    // first section
    public function addapplyfirstsection()
    {
        return view("admin.apply.firstsection");
    }
    public function  submitapplyfirstsection(Request $request)
    {
        $request->validate([
            'town' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'timing' => 'required',
            'email' => 'required|email',
            'emailtext' => 'required',
        ]);

        $ApplyFirstSection = new ApplyFirstSection;
        $ApplyFirstSection->home_town = $request->town;
        $ApplyFirstSection->complete_address = $request->address;
        $ApplyFirstSection->phone = $request->phone;
        $ApplyFirstSection->timing = $request->timing;
        $ApplyFirstSection->email = $request->email;
        $ApplyFirstSection->email_text = $request->emailtext;
        $ApplyFirstSection->save();
        return back()->withSuccess('Section Data Added Successfully');
    }

    // footer section
    public function addfootersection()
    {
        return view("admin.footer.footer");
    }
    public function  submitAbout(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'about' => 'required',
        ]);

        $FooterAboutSection = new FooterAboutSection;
        $FooterAboutSection->title = $request->title;
        $FooterAboutSection->about = $request->about;
        $FooterAboutSection->save();
        return back()->withSuccess('Data Added Successfully');
    }
    public function  submitContact(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $FooterContactSection = new FooterContactSection;
        $FooterContactSection->title = $request->title;
        $FooterContactSection->address = $request->address;
        $FooterContactSection->phone = $request->phone;
        $FooterContactSection->email = $request->email;
        $FooterContactSection->save();
        return back()->withSuccess('Data Added Successfully');
    }
    public function  submitNewsletter(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'titletext' => 'required',
            'email' => 'required|email',
        ]);

        $FooterNewsletterSection = new FooterNewsletterSection;
        $FooterNewsletterSection->title = $request->title;
        $FooterNewsletterSection->text = $request->titletext;
        $FooterNewsletterSection->email = $request->email;
        $FooterNewsletterSection->save();
        return back()->withSuccess('Data Added Successfully');
    }
    public function  submitfollowus(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'titletext' => 'required',
            'fblink' => 'required',
            'instalink' => 'required',
            'whatsapp' => 'required',
        ]);

        $FooterFollowUsSection = new FooterFollowUsSection;
        $FooterFollowUsSection->title = $request->title;
        $FooterFollowUsSection->text = $request->titletext;
        $FooterFollowUsSection->facebook = $request->fblink;
        $FooterFollowUsSection->instagram = $request->instalink;
        $FooterFollowUsSection->whatsapp = $request->whatsapp;
        $FooterFollowUsSection->save();
        return back()->withSuccess('Data Added Successfully');
    }
    public function  submitcopyright(Request $request)
    {
        $request->validate([
            'copyright' => 'required',
        ]);

        $FooterCopyrightSection = new FooterCopyrightSection;
        $FooterCopyrightSection->copyright = $request->copyright;
        $FooterCopyrightSection->save();
        return back()->withSuccess('Data Added Successfully');
    }
}
