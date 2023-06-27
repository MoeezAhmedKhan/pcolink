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
use App\Models\PcoCarsFeatureSection;
use App\Models\PcoCarssContactSection;
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
use Illuminate\Support\Facades\Mail;

class BaseController extends Controller
{
    public function home()
    {
        $homefirst = HomeFirstSection::latest()->first();
        $homesecond = HomeSecondSection::latest()->first();
        $homethird = HomeThirdSection::latest()->first();
        $homefourth = HomeFourthSection::all();
        $homefifth = HomeFifthSection::latest()->first();
        $homesixth = HomeSixthSection::latest()->first();

        $fooabout = FooterAboutSection::latest()->first();
        $foocontact = FooterContactSection::latest()->first();
        $foonewsletter = FooterNewsletterSection::latest()->first();
        $foofollowus = FooterFollowUsSection::latest()->first();
        $foocopyright = FooterCopyrightSection::latest()->first();

        return view('home', [
            'homefirst' => $homefirst, 'homesecond' => $homesecond, 'homethird' => $homethird,
            'homefourth' => $homefourth, 'homefifth' => $homefifth, 'homesixth' => $homesixth, 'fooabout' => $fooabout,
            'foocontact' => $foocontact, 'foonewsletter' => $foonewsletter, 'foofollowus' => $foofollowus,
            'foocopyright' => $foocopyright
        ]);
    }
    public function pcocars()
    {
        $pcocarfirst = PcoCarsFirstSection::latest()->first();
        $pcocarsecond = PcoCarsSecondSection::all();
        $pcocarthirdHead = PcoCarsThirdSectionHead::latest()->first();
        $pcocarthird = PcoCarsThirdSection::all();

        $fooabout = FooterAboutSection::latest()->first();
        $foocontact = FooterContactSection::latest()->first();
        $foonewsletter = FooterNewsletterSection::latest()->first();
        $foofollowus = FooterFollowUsSection::latest()->first();
        $foocopyright = FooterCopyrightSection::latest()->first();

        return view("pcocars", [
            'pcocarfirst' => $pcocarfirst, 'pcocarsecond' => $pcocarsecond, 'pcocarthirdHead' => $pcocarthirdHead,
            'pcocarthird' => $pcocarthird, 'fooabout' => $fooabout,'foocontact' => $foocontact, 'foonewsletter' => $foonewsletter, 'foofollowus' => $foofollowus,
            'foocopyright' => $foocopyright
        ]);
    }
    public function help()
    {
        $help1 = HelpFirstSection::latest()->first();
        $help2 = HelpSecondSection::all();

        $fooabout = FooterAboutSection::latest()->first();
        $foocontact = FooterContactSection::latest()->first();
        $foonewsletter = FooterNewsletterSection::latest()->first();
        $foofollowus = FooterFollowUsSection::latest()->first();
        $foocopyright = FooterCopyrightSection::latest()->first();

        return view("help", [
            'help1' => $help1, 'help2' => $help2, 'fooabout' => $fooabout,
            'foocontact' => $foocontact, 'foonewsletter' => $foonewsletter, 'foofollowus' => $foofollowus,
            'foocopyright' => $foocopyright
        ]);
    }
    public function apply()
    {
        $applyData = ApplyFirstSection::latest()->first();

        $fooabout = FooterAboutSection::latest()->first();
        $foocontact = FooterContactSection::latest()->first();
        $foonewsletter = FooterNewsletterSection::latest()->first();
        $foofollowus = FooterFollowUsSection::latest()->first();
        $foocopyright = FooterCopyrightSection::latest()->first();

        return view("apply", [
            'applyData' => $applyData, 'fooabout' => $fooabout,
            'foocontact' => $foocontact, 'foonewsletter' => $foonewsletter, 'foofollowus' => $foofollowus,
            'foocopyright' => $foocopyright
        ]);
    }
    public function cardetails($id)
    {
        $carData = PcoCarsSecondSection::where('id', $id)->first();
        $carImage = PcoCarsImages::where('pco_cars_id', $id)->get();
        $aboutData = PcoCarsAboutSection::where('pco_cars_id', $id)->latest()->first();
        $featureData = PcoCarsFeatureSection::where('pco_cars_id', $id)->get();
        $contactData = PcoCarssContactSection::latest()->first();

        $fooabout = FooterAboutSection::latest()->first();
        $foocontact = FooterContactSection::latest()->first();
        $foonewsletter = FooterNewsletterSection::latest()->first();
        $foofollowus = FooterFollowUsSection::latest()->first();
        $foocopyright = FooterCopyrightSection::latest()->first();

        return view("cardetails", [
            'carData' => $carData, 'carImage' => $carImage, 'aboutData' => $aboutData, 'contactData' => $contactData,
            'featureData' => $featureData, 'fooabout' => $fooabout,
            'foocontact' => $foocontact, 'foonewsletter' => $foonewsletter, 'foofollowus' => $foofollowus,
            'foocopyright' => $foocopyright
        ]);
    }
    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'postal' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ]);

        $ApplySecondSection = new ApplySecondSection;
        $ApplySecondSection->name = $request->name;
        $ApplySecondSection->email = $request->email;
        $ApplySecondSection->city = $request->city;
        $ApplySecondSection->postal_code = $request->postal;
        $ApplySecondSection->phone = $request->phone;
        $ApplySecondSection->address = $request->address;
        $ApplySecondSection->message = $request->message;
        $ApplySecondSection->save();

        return back()->withSuccess('Contact Submitted Successfully');
    }
}
