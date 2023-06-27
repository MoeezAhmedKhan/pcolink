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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Foreach_;
use Carbon\Carbon;


class AdminManage extends Controller
{
    // for admin home page
    // home first section
    public function manageFirstSection()
    {
        $homefirst = HomeFirstSection::get();
        return view("admin.home.managefirstsection", ['homefirst' => $homefirst]);
    }
    public function editFirstSection($id)
    {
        $homefirst = HomeFirstSection::where('id', $id)->first();
        return view('admin.home.editfirstsection', ['homefirst' => $homefirst]);
    }
    public function updateFirstSection(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'description' => 'required',
        ]);
        $homeFirstSection = HomeFirstSection::where('id', $id)->first();

        $previousImage = $homeFirstSection->image;
        if (isset($request->image)) {
            $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $homeFirstSection->image = $imageName;

            if ($previousImage) {
                $previousImagePath = public_path('uploads') . '/' . $previousImage;
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }
        }

        $homeFirstSection->title = $request->title;
        $homeFirstSection->description = $request->description;
        $homeFirstSection->save();
        return redirect('/mamagehomefirstsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deleteHomeFirstSection($id)
    {
        $homeFirstSection = HomeFirstSection::where('id', $id)->first();
        $imagePath = $homeFirstSection->image;
        if ($imagePath) {
            $previousImagePath = public_path('uploads') . '/' . $imagePath;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
        $homeFirstSection->delete();
        return redirect('/mamagehomefirstsection')->with('session', 'Data Deleted Successfully');
    }

    // home second section
    public function mamageSecondSection()
    {
        $homesecond = HomeSecondSection::get();
        return view("admin.home.managesecondsection", ['homesecond' => $homesecond]);
    }
    public function editSecondSection($id)
    {
        $homesecond = HomeSecondSection::where('id', $id)->first();
        return view('admin.home.editsecondsection', ['homesecond' => $homesecond]);
    }
    public function updateSecondSection(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image1' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'image2' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'image3' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'image4' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
        ]);
        $homeSecondSection = HomeSecondSection::where('id', $id)->first();

        $previousImage1 = $homeSecondSection->image1;
        $previousImage2 = $homeSecondSection->image2;
        $previousImage3 = $homeSecondSection->image3;
        $previousImage4 = $homeSecondSection->image4;

        if (isset($request->image1)) {
            $imageName1 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image1->extension();
            $request->image1->move(public_path('uploads'), $imageName1);
            $homeSecondSection->image1 = $imageName1;

            if ($previousImage1) {
                $previousImagePath1 = public_path('uploads') . '/' . $previousImage1;
                if (file_exists($previousImagePath1)) {
                    unlink($previousImagePath1);
                }
            }
        }
        if (isset($request->image2)) {
            $imageName2 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image2->extension();
            $request->image2->move(public_path('uploads'), $imageName2);
            $homeSecondSection->image2 = $imageName2;

            if ($previousImage2) {
                $previousImagePath2 = public_path('uploads') . '/' . $previousImage2;
                if (file_exists($previousImagePath2)) {
                    unlink($previousImagePath2);
                }
            }
        }
        if (isset($request->image3)) {
            $imageName3 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image3->extension();
            $request->image3->move(public_path('uploads'), $imageName3);
            $homeSecondSection->image3 = $imageName3;

            if ($previousImage3) {
                $previousImagePath3 = public_path('uploads') . '/' . $previousImage3;
                if (file_exists($previousImagePath3)) {
                    unlink($previousImagePath3);
                }
            }
        }
        if (isset($request->image4)) {
            $imageName4 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image4->extension();
            $request->image4->move(public_path('uploads'), $imageName4);
            $homeSecondSection->image4 = $imageName4;

            if ($previousImage4) {
                $previousImagePath4 = public_path('uploads') . '/' . $previousImage4;
                if (file_exists($previousImagePath4)) {
                    unlink($previousImagePath4);
                }
            }
        }

        $homeSecondSection->title = $request->title;
        $homeSecondSection->save();
        return redirect('/managehomesecondsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deleteHomeSecondSection($id)
    {
        $homesecond = HomeSecondSection::where('id', $id)->first();
        $imagePath1 = $homesecond->image1;
        $imagePath2 = $homesecond->image2;
        $imagePath3 = $homesecond->image3;
        $imagePath4 = $homesecond->image4;
        if ($imagePath1) {
            $previousImagePath1 = public_path('uploads') . '/' . $imagePath1;
            if (file_exists($previousImagePath1)) {
                unlink($previousImagePath1);
            }
        }
        if ($imagePath2) {
            $previousImagePath2 = public_path('uploads') . '/' . $imagePath2;
            if (file_exists($previousImagePath2)) {
                unlink($previousImagePath2);
            }
        }
        if ($imagePath3) {
            $previousImagePath3 = public_path('uploads') . '/' . $imagePath3;
            if (file_exists($previousImagePath3)) {
                unlink($previousImagePath3);
            }
        }
        if ($imagePath4) {
            $previousImagePath4 = public_path('uploads') . '/' . $imagePath4;
            if (file_exists($previousImagePath4)) {
                unlink($previousImagePath4);
            }
        }

        $homesecond->delete();
        return redirect('/managehomesecondsection')->with('session', 'Data Deleted Successfully');
    }

    // home third section 
    public function manageThirdSection()
    {
        $homethird = HomeThirdSection::get();
        return view("admin.home.managethirdsection", ['homethird' => $homethird]);
    }
    public function editThirdSection($id)
    {
        $homethird = HomeThirdSection::where('id', $id)->first();
        return view('admin.home.editthirdsection', ['homethird' => $homethird]);
    }
    public function updateThirdSection(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'description' => 'required',
        ]);
        $homeThirdSection = HomeThirdSection::where('id', $id)->first();

        $previousImage = $homeThirdSection->image;
        if (isset($request->image)) {
            $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $homeThirdSection->image = $imageName;

            if ($previousImage) {
                $previousImagePath = public_path('uploads') . '/' . $previousImage;
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }
        }

        $homeThirdSection->title = $request->title;
        $homeThirdSection->description = $request->description;
        $homeThirdSection->save();
        return redirect('/managehomethirdsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deleteHomeThirdSection($id)
    {
        $homethird = HomeThirdSection::where('id', $id)->first();
        $imagePath = $homethird->image;
        if ($imagePath) {
            $previousImagePath = public_path('uploads') . '/' . $imagePath;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
        $homethird->delete();
        return redirect('/managehomethirdsection')->with('session', 'Data Deleted Successfully');
    }

    // fourth section
    public function manageFourthSection()
    {
        $homefourth = HomeFourthSection::get();
        return view("admin.home.managefourthsection", ['homefourth' => $homefourth]);
    }
    public function editFourthSection($id)
    {
        $homefourth = HomeFourthSection::where('id', $id)->first();
        return view('admin.home.editfourthsection', ['homefourth' => $homefourth]);
    }
    public function updateFourthSection(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5000000',
        ]);
        $homefourthSection = HomeFourthSection::where('id', $id)->first();

        $previousImage = $homefourthSection->image;

        if (isset($request->image)) {
            $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $homefourthSection->image = $imageName;

            if ($previousImage) {
                $previousImagePath = public_path('uploads') . '/' . $previousImage;
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }
        }

        $homefourthSection->save();
        return redirect('/managehomefourthsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deleteHomeFourthSection($id)
    {
        $homefourth = HomeFourthSection::where('id', $id)->first();
        $imagePath = $homefourth->image;
        if ($imagePath) {
            $previousImagePath = public_path('uploads') . '/' . $imagePath;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
        $homefourth->delete();
        return redirect('/managehomefourthsection')->with('session', 'Data Deleted Successfully');
    }

    // home fifth section
    public function manageFifthSection()
    {
        $homefifth = HomeFifthSection::get();
        return view("admin.home.managefifthsection", ['homefifth' => $homefifth]);
    }
    public function editFifthSection($id)
    {
        $homefifth = HomeFifthSection::where('id', $id)->first();
        return view('admin.home.editfifthsection', ['homefifth' => $homefifth]);
    }
    public function updateFifthSection(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image1' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'image2' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'image3' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
        ]);

        $homeFifthSection = HomeFifthSection::where('id', $id)->first();

        $previousImage1 = $homeFifthSection->image1;
        $previousImage2 = $homeFifthSection->image2;
        $previousImage3 = $homeFifthSection->image3;

        if (isset($request->image1)) {
            $imageName1 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image1->extension();
            $request->image1->move(public_path('uploads'), $imageName1);
            $homeFifthSection->image1 = $imageName1;

            if ($previousImage1) {
                $previousImagePath1 = public_path('uploads') . '/' . $previousImage1;
                if (file_exists($previousImagePath1)) {
                    unlink($previousImagePath1);
                }
            }
        }

        if (isset($request->image2)) {
            $imageName2 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image2->extension();
            $request->image2->move(public_path('uploads'), $imageName2);
            $homeFifthSection->image2 = $imageName2;

            if ($previousImage2) {
                $previousImagePath2 = public_path('uploads') . '/' . $previousImage2;
                if (file_exists($previousImagePath2)) {
                    unlink($previousImagePath2);
                }
            }
        }

        if (isset($request->image3)) {
            $imageName3 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image3->extension();
            $request->image3->move(public_path('uploads'), $imageName3);
            $homeFifthSection->image3 = $imageName3;

            if ($previousImage3) {
                $previousImagePath3 = public_path('uploads') . '/' . $previousImage3;
                if (file_exists($previousImagePath3)) {
                    unlink($previousImagePath3);
                }
            }
        }

        $homeFifthSection->title = $request->title;
        $homeFifthSection->description1 = $request->description1;
        $homeFifthSection->description2 = $request->description2;
        $homeFifthSection->description3 = $request->description3;
        $homeFifthSection->save();
        return redirect('/managehomefifthsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deleteHomeFifthSection($id)
    {
        $homefifth = HomeFifthSection::where('id', $id)->first();
        $imagePath1 = $homefifth->image1;
        $imagePath2 = $homefifth->image2;
        $imagePath3 = $homefifth->image3;
        if ($imagePath1) {
            $previousImagePath1 = public_path('uploads') . '/' . $imagePath1;
            if (file_exists($previousImagePath1)) {
                unlink($previousImagePath1);
            }
        }
        if ($imagePath2) {
            $previousImagePath2 = public_path('uploads') . '/' . $imagePath2;
            if (file_exists($previousImagePath2)) {
                unlink($previousImagePath2);
            }
        }
        if ($imagePath3) {
            $previousImagePath3 = public_path('uploads') . '/' . $imagePath3;
            if (file_exists($previousImagePath3)) {
                unlink($previousImagePath3);
            }
        }

        $homefifth->delete();
        return redirect('/managehomefifthsection')->with('session', 'Data Deleted Successfully');
    }

    // home six secttion
    public function manageSixthSection()
    {
        $homesix = HomeSixthSection::get();
        return view("admin.home.managesixsection", ['homesix' => $homesix]);
    }
    public function editSixthSection($id)
    {
        $homesix = HomeSixthSection::where('id', $id)->first();
        return view('admin.home.editsixsection', ['homesix' => $homesix]);
    }
    public function updateSixthSection(Request $request, $id)
    {
        $request->validate([
            'left_text' => 'required',
            'left_button_text' => 'required',
            'left_image' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'right_image' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
        ]);
        $homeSixthSection = HomeSixthSection::where('id', $id)->first();

        $previousImage1 = $homeSixthSection->left_image;
        $previousImage2 = $homeSixthSection->right_image;

        if (isset($request->left_image)) {
            $imageName1 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->left_image->extension();
            $request->left_image->move(public_path('uploads'), $imageName1);
            $homeSixthSection->left_image = $imageName1;

            if ($previousImage1) {
                $previousImagePath1 = public_path('uploads') . '/' . $previousImage1;
                if (file_exists($previousImagePath1)) {
                    unlink($previousImagePath1);
                }
            }
        }
        if (isset($request->right_image)) {
            $imageName2 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->right_image->extension();
            $request->right_image->move(public_path('uploads'), $imageName2);
            $homeSixthSection->right_image = $imageName2;

            if ($previousImage2) {
                $previousImagePath2 = public_path('uploads') . '/' . $previousImage2;
                if (file_exists($previousImagePath2)) {
                    unlink($previousImagePath2);
                }
            }
        }

        $homeSixthSection->left_text = $request->left_text;
        $homeSixthSection->left_button_text = $request->left_button_text;
        $homeSixthSection->save();
        return redirect('/managehomesixthsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deleteHomeSixthSection($id)
    {
        $homesixth = HomeSixthSection::where('id', $id)->first();
        $imagePath1 = $homesixth->left_image;
        $imagePath2 = $homesixth->right_image;
        if ($imagePath1) {
            $previousImagePath1 = public_path('uploads') . '/' . $imagePath1;
            if (file_exists($previousImagePath1)) {
                unlink($previousImagePath1);
            }
        }
        if ($imagePath2) {
            $previousImagePath2 = public_path('uploads') . '/' . $imagePath2;
            if (file_exists($previousImagePath2)) {
                unlink($previousImagePath2);
            }
        }

        $homesixth->delete();
        return redirect('/managehomesixthsection')->with('session', 'Data Deleted Successfully');
    }

    // for admin pco cars
    // first section
    public function managepcocarsFirstSection()
    {
        $pcofirst = PcoCarsFirstSection::get();
        return view("admin.pcocars.managefirstsection", ['pcofirst' => $pcofirst]);
    }
    public function editpcocarsFirstSection($id)
    {
        $pcofirst = PcoCarsFirstSection::where('id', $id)->first();
        return view('admin.pcocars.editfirstsection', ['pcofirst' => $pcofirst]);
    }
    public function updatepcocarsFirstSection(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'description' => 'required',
        ]);
        $pcocarsFirstSection = PcoCarsFirstSection::where('id', $id)->first();

        $previousImage = $pcocarsFirstSection->image;
        if (isset($request->image)) {
            $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $pcocarsFirstSection->image = $imageName;

            if ($previousImage) {
                $previousImagePath = public_path('uploads') . '/' . $previousImage;
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }
        }

        $pcocarsFirstSection->title = $request->title;
        $pcocarsFirstSection->description = $request->description;
        $pcocarsFirstSection->save();
        return redirect('/managepcocarsfirstsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deletepcocarsFirstSection($id)
    {
        $pcofirst = PcoCarsFirstSection::where('id', $id)->first();
        $imagePath = $pcofirst->image;
        if ($imagePath) {
            $previousImagePath = public_path('uploads') . '/' . $imagePath;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
        $pcofirst->delete();
        return redirect('/managepcocarsfirstsection')->with('session', 'Data Deleted Successfully');
    }

    // second section
    public function managepcocarssecondsection()
    {
        $pcosecond = PcoCarsSecondSection::get();
        $pcocarsAbout = PcoCarsAboutSection::get();
        $pcocarsfeautre = PcoCarsFeatureSection::get();
        return view("admin.pcocars.managesecondsection", ['pcosecond' => $pcosecond, 'pcocarsAbout' => $pcocarsAbout, 'pcocarsfeautre' => $pcocarsfeautre]);
    }
    public function manageviewpcocarimages($id)
    {
        $carimages = PcoCarsImages::where('pco_cars_id', $id)->get();
        foreach ($carimages as $image) {
            $image->image_url = asset('uploads/' . $image->car_image);
        }
        return view("admin.pcocars.managepcocarimages", ['carimages' => $carimages, 'pcocarsid' => $id]);
    }
    public function editpcocarssecondsection($id)
    {
        $pcosecond = PcoCarsSecondSection::where('id', $id)->first();
        return view('admin.pcocars.editsecondsection', ['pcosecond' => $pcosecond]);
    }
    public function editpcocarsimages($id, $pcocarsid)
    {
        $carimages = PcoCarsImages::where('id', $id)->first();
        return view('admin.pcocars.editpcocarimages', ['carimages' => $carimages, 'pcocarsid' => $pcocarsid]);
    }
    public function updatepcocarssecondsection(Request $request, $id)
    {
        $request->validate([
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
            'image' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
        ]);
        $pcocarsSecondSection = PcoCarsSecondSection::where('id', $id)->first();

        $previousImage = $pcocarsSecondSection->image;
        if (isset($request->image)) {
            $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $pcocarsSecondSection->image = $imageName;

            if ($previousImage) {
                $previousImagePath = public_path('uploads') . '/' . $previousImage;
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }
        }

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
        $pcocarsSecondSection->save();
        return redirect('/managepcocarssecondsection')->with('session', 'Section Data Updated Successfully');
    }
    public function updatepcocarimage(Request $request, $id, $pcocarsid)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5000000',
        ]);
        $PcoCarsImages = PcoCarsImages::where('id', $id)->first();

        $previousImage = $PcoCarsImages->car_image;
        if (isset($request->image)) {
            $imageName = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $PcoCarsImages->car_image = $imageName;

            if ($previousImage) {
                $previousImagePath = public_path('uploads') . '/' . $previousImage;
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }
        }

        $PcoCarsImages->save();
        return redirect()->route('viewpcocarimages', ["id" => $pcocarsid])->with('session', 'Image Updated Successfully');
    }
    public function deletepcocarssecondsection($id)
    {
        $pcofeatures = PcoCarsFeatureSection::where('pco_cars_id', $id)->get();
        $pcoabout = PcoCarsAboutSection::where('pco_cars_id', $id)->get();
        $pcosecond = PcoCarsSecondSection::where('id', $id)->first();
        $PcoCarsImages = PcoCarsImages::where('pco_cars_id', $id)->get();
        $imagePath = $pcosecond->image;

        foreach ($pcofeatures as $feat) {
            $pcosecond->carfeatures()->delete();
        }
        foreach ($pcoabout as $about) {
            $pcosecond->carabout()->delete();
        }


        if ($imagePath) {
            $previousImagePath = public_path('uploads') . '/' . $imagePath;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
        foreach ($PcoCarsImages as $image) {
            $carImg = $image->car_image;
            $prevImagePath = public_path('uploads') . '/' . $carImg;
            if (file_exists($prevImagePath)) {
                unlink($prevImagePath);
            }
            $pcosecond->carimg()->delete();
        }

        $pcosecond->delete();
        return redirect('/managepcocarssecondsection')->with('session', 'Data Deleted with its cars images Successfully');
    }
    public function deletepcocarimage($id, $pcocarsid)
    {
        $PcoCarsImages = PcoCarsImages::where('id', $id)->first();
        $imagePath = $PcoCarsImages->car_image;
        if ($imagePath) {
            $previousImagePath = public_path('uploads') . '/' . $imagePath;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
        $PcoCarsImages->delete();
        return redirect()->route('viewpcocarimages', ["id" => $pcocarsid])->with('session', 'Image Deleted Successfully');
    }

    // third section
    public function managepcocarsThirdsection()
    {
        $pcothirdHead = PcoCarsThirdSectionHead::get();
        $pcothird = PcoCarsThirdSection::get();
        return view("admin.pcocars.managethirdsection", ['pcothird' => $pcothird, 'pcothirdHead' => $pcothirdHead]);
    }
    public function editpcocarsThirdsectionhead($id)
    {
        $pcothirdHead = PcoCarsThirdSectionHead::where('id', $id)->first();
        return view('admin.pcocars.editthirdsectionhead', ['pcothirdHead' => $pcothirdHead]);
    }
    public function editpcocarsThirdsection($id)
    {
        $pcothird = PcoCarsThirdSection::where('id', $id)->first();
        return view('admin.pcocars.editthirdsection', ['pcothird' => $pcothird]);
    }
    public function  updatepcocarsthirdsectionhead(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'title_of_text' => 'required',
        ]);

        $pcothirdHead = PcoCarsThirdSectionHead::where('id', $id)->first();
        $pcothirdHead->title = $request->title;
        $pcothirdHead->title_of_text = $request->title_of_text;
        $pcothirdHead->save();
        return redirect('/managepcocarsthirdsection')->with('session', 'Data Updated Successfully');
    }
    public function  updatepcocarsthirdsection(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg|max:5000000',
            'title' => 'required',
            'description' => 'required',
        ]);

        $pcocarsThirdSection = PcoCarsThirdSection::where('id', $id)->first();

        $previousImage = $pcocarsThirdSection->image;


        if (isset($request->image)) {
            $imageName1 = Str::random(5) . '.' . date('YmdHis') . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName1);
            $pcocarsThirdSection->image = $imageName1;

            if ($previousImage) {
                $previousImagePath = public_path('uploads') . '/' . $previousImage;
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }
        }


        $pcocarsThirdSection->title = $request->title;
        $pcocarsThirdSection->description = $request->description;

        $pcocarsThirdSection->save();
        return redirect('/managepcocarsthirdsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deletepcocarsthirdsectionhead($id)
    {
        $pcothirdHead = PcoCarsThirdSectionHead::where('id', $id)->first();
        $pcothirdHead->delete();
        return redirect('/managepcocarsthirdsection')->with('session', 'Data Deleted Successfully');
    }
    public function deletepcocarsthirdsection($id)
    {
        $pcothird = PcoCarsThirdSection::where('id', $id)->first();
        $imagePath = $pcothird->image;

        if ($imagePath) {
            $previousImagePath = public_path('uploads') . '/' . $imagePath;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }

        $pcothird->delete();
        return redirect('/managepcocarsthirdsection')->with('session', 'Data Deleted Successfully');
    }

    // about section
    public function managepcocardetailsaboutsection()
    {
        $pcocarsAbout = DB::table('pco_cars_about_sections as a')
            ->select('a.id', 'a.about', 'c.car_name')
            ->join('pco_cars_second_sections as c', 'a.pco_cars_id', '=', 'c.id')
            ->get();
        return view("admin.pcocars.manageaboutsection", ['pcocarsAbout' => $pcocarsAbout]);
    }
    public function editpcocarsAboutsection($id)
    {
        $pcocarsAbout = PcoCarsAboutSection::where('id', $id)->first();
        return view('admin.pcocars.editaboutsection', ['pcocarsAbout' => $pcocarsAbout]);
    }
    public function updatepcocarsAboutsection(Request $request, $id)
    {
        $request->validate([
            'about' => 'required',
        ]);
        $pcocarsAbout = PcoCarsAboutSection::where('id', $id)->first();

        $pcocarsAbout->about = $request->about;
        $pcocarsAbout->save();
        return redirect('managepcocardetailsaboutsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deletepcocarsAboutsection($id)
    {
        $pcocarsabout = PcoCarsAboutSection::where('id', $id)->first();
        $pcocarsabout->delete();
        return redirect('/managepcocardetailsaboutsection')->with('session', 'Data Deleted Successfully');
    }

    // contact section
    public function managepcocardetailscontactsection()
    {
        $pcocarsContact = PcoCarssContactSection::get();
        return view("admin.pcocars.managecontactsection", ['pcocarsContact' => $pcocarsContact]);
    }
    public function editpcocardetailscontactsection($id)
    {
        $pcocarsContact = PcoCarssContactSection::where('id', $id)->first();
        return view('admin.pcocars.editcontactsection', ['pcocarsContact' => $pcocarsContact]);
    }
    public function updatepcocardetailscontactsection(Request $request, $id)
    {
        $request->validate([
            'callnow' => 'required',
            'address' => 'required',
            'number' => 'required',
        ]);
        $pcocarsContact = PcoCarssContactSection::where('id', $id)->first();

        $pcocarsContact->text = $request->callnow;
        $pcocarsContact->address = $request->address;
        $pcocarsContact->number = $request->number;
        $pcocarsContact->save();
        return redirect('/managepcocardetailscontactsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deletepcocarscontactsection($id)
    {
        $pcocarsabout = PcoCarssContactSection::where('id', $id)->first();
        $pcocarsabout->delete();
        return redirect('/managepcocardetailscontactsection')->with('session', 'Data Deleted Successfully');
    }

    // features section
    public function managepcocarsfeaturesection()
    {
        $pcocarsfeautre = DB::table('pco_cars_feature_sections as f')
            ->select('c.id', 'c.car_name')
            ->join('pco_cars_second_sections as c', 'f.pco_cars_id', '=', 'c.id')
            ->distinct('c.car_name')
            ->get();

        return view("admin.pcocars.managefeaturesection", ['pcocarsfeautre' => $pcocarsfeautre]);
    }
    public function managepcocarsfeatures($id)
    {
        $pcocarsfeautre = DB::table('pco_cars_feature_sections as f')
            ->select('f.id', 'f.feature')
            ->join('pco_cars_second_sections as c', 'f.pco_cars_id', '=', 'c.id')
            ->where('f.pco_cars_id', '=', $id)
            ->get();
        return view("admin.pcocars.managefeatures", ['pcocarsfeautre' => $pcocarsfeautre, 'pcocarsid' => $id]);
    }
    public function editpcocarsfeature($id, $pcocarid)
    {
        $pcocarsfeature = PcoCarsFeatureSection::where('id', $id)->get();
        return view("admin.pcocars.editfeature", ['pcocarsfeature' => $pcocarsfeature, 'pcocarid' => $pcocarid]);
    }
    public function updatepcocarsfeature(Request $request, $id, $pcocarsid)
    {
        $request->validate([
            'feature' => 'required',
        ]);
        $pcocarsfeautre = PcoCarsFeatureSection::where('id', $id)->first();
        $pcocarsfeautre->feature = $request->feature;
        $pcocarsfeautre->save();
        return redirect()->route('viewpcocarfeatures', ["id" => $pcocarsid])->with('session', 'Feature Updated Successfully');
    }
    public function deletepcocarsfeature($id, $pcocarsid)
    {
        $pcocarsabout = PcoCarsFeatureSection::where('id', $id)->first();
        $pcocarsabout->delete();
        return redirect()->route('viewpcocarfeatures', ["id" => $pcocarsid])->with('session', 'Feature Deleted Successfully');
    }

    // help page
    // first section
    public function managehelpfirstsection()
    {
        $helpfirst = HelpFirstSection::get();
        $helpsecond = HelpSecondSection::get();
        return view("admin.help.managefirstsection", ['helpfirst' => $helpfirst, 'helpsecond' => $helpsecond]);
    }
    public function edithelpfirstsection($id)
    {
        $helpfirst = HelpFirstSection::where('id', $id)->first();
        return view("admin.help.editfirstsection", ['helpfirst' => $helpfirst]);
    }
    public function updatehelpfirstsection(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);
        $HelpFirstSection = HelpFirstSection::where('id', $id)->first();

        $HelpFirstSection->title = $request->title;
        $HelpFirstSection->text = $request->text;
        $HelpFirstSection->save();
        return redirect('/managehelpfirstsection')->with('session1', 'Section Data Updated Successfully');
    }
    public function deletehelpfirstsection($id)
    {
        $helpfirst = HelpFirstSection::where('id', $id)->first();
        $helpfirst->delete();
        return redirect('/managehelpfirstsection')->with('session1', 'Data Deleted Successfully');
    }

    // second section
    public function edithelpsecondsection($id)
    {
        $helpsecond = HelpSecondSection::where('id', $id)->first();
        return view("admin.help.editsecondsection", ['helpsecond' => $helpsecond]);
    }
    public function updatehelpsecondsection(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $HelpSecondSection = HelpSecondSection::where('id', $id)->first();

        $HelpSecondSection->question = $request->question;
        $HelpSecondSection->answer = $request->answer;
        $HelpSecondSection->save();
        return redirect('/managehelpfirstsection')->with('session1', 'Section Data Updated Successfully');
    }
    public function deletehelpsecondsection($id)
    {
        $helpsecond = HelpSecondSection::where('id', $id)->first();
        $helpsecond->delete();
        return redirect('/managehelpfirstsection')->with('session2', 'Data Deleted Successfully');
    }

    // apply section
    public function manageapplyfirstsection()
    {
        $applyfirst = ApplyFirstSection::get();
        return view("admin.apply.managefirstsection", ['applyfirst' => $applyfirst]);
    }
    public function editapplyfirstsection($id)
    {
        $applyfirst = ApplyFirstSection::where('id', $id)->first();
        return view("admin.apply.editfirstsection", ['applyfirst' => $applyfirst]);
    }
    public function  updateapplyfirstsection(Request $request, $id)
    {
        $request->validate([
            'town' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'timing' => 'required',
            'email' => 'required',
            'emailtext' => 'required',
        ]);

        $ApplyFirstSection = ApplyFirstSection::where('id', $id)->first();
        $ApplyFirstSection->home_town = $request->town;
        $ApplyFirstSection->complete_address = $request->address;
        $ApplyFirstSection->phone = $request->phone;
        $ApplyFirstSection->timing = $request->timing;
        $ApplyFirstSection->email = $request->email;
        $ApplyFirstSection->email_text = $request->emailtext;
        $ApplyFirstSection->save();
        return redirect('/manageapplyfirstsection')->with('session', 'Section Data Updated Successfully');
    }
    public function deleteapplyfirstsection($id)
    {
        $applyfirst = ApplyFirstSection::where('id', $id)->first();
        $applyfirst->delete();
        return redirect('/manageapplyfirstsection')->with('session', 'Data Deleted Successfully');
    }


    public function getcontactformData()
    {
        $applysecond = ApplySecondSection::orderBy('created_at', 'desc')->get();
        $dateTime = array();
        foreach ($applysecond as $apply) {
            $datetime = $apply->created_at;
            $carbon = Carbon::parse($datetime);
            $formattedDatetime = $carbon->format('Y-m-d h:i:s A');
            array_push($dateTime,$formattedDatetime);
        }
        return view("admin.apply.managesecondsection", ['applysecond' => $applysecond,'formattedDatetime'=>$dateTime]);
    }
    public function deletecontact($id)
    {
        $contact = ApplySecondSection::where('id', $id)->first();
        $contact->delete();
        return redirect('/getcontactdetails')->with('session', 'Data Deleted Successfully');
    }
    public function allontactsdelete()
    {
        ApplySecondSection::truncate();
        return redirect('/getcontactdetails')->with('session', 'Data Deleted Successfully');
    }

    // footer section
    public function managefootersection()
    {
        $about = FooterAboutSection::get();
        $contact = FooterContactSection::get();
        $newsletter = FooterNewsletterSection::get();
        $follow = FooterFollowUsSection::get();
        $copyright = FooterCopyrightSection::get();
        return view("admin.footer.managefooter", ['about' => $about, 'contact' => $contact, 'newsletter' => $newsletter, 'follow' => $follow, 'copyright' => $copyright]);
    }
    public function editfooterabout($id)
    {
        $about = FooterAboutSection::where('id', $id)->first();
        return view('admin.footer.editfooterabout', ['about' => $about]);
    }
    public function updatefooterabout(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'about' => 'required',
        ]);

        $FooterAboutSection = FooterAboutSection::where('id', $id)->first();
        $FooterAboutSection->title = $request->title;
        $FooterAboutSection->about = $request->about;
        $FooterAboutSection->save();

        return redirect('/managefootersection')->with('session', 'Data Updated Successfully');
    }
    public function deletefooterabout($id)
    {
        $fooabout = FooterAboutSection::where('id', $id)->first();
        $fooabout->delete();
        return redirect('/managefootersection')->with('session', 'Data Deleted Successfully');
    }

    public function editfootercontact($id)
    {
        $contact = FooterContactSection::where('id', $id)->first();
        return view('admin.footer.editfootercontact', ['contact' => $contact]);
    }
    public function  updatefootercontact(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $FooterContactSection = FooterContactSection::where('id', $id)->first();
        $FooterContactSection->title = $request->title;
        $FooterContactSection->address = $request->address;
        $FooterContactSection->phone = $request->phone;
        $FooterContactSection->email = $request->email;
        $FooterContactSection->save();
        return redirect('/managefootersection')->with('session', 'Data Updated Successfully');
    }
    public function deletefootercontact($id)
    {
        $foocontact = FooterContactSection::where('id', $id)->first();
        $foocontact->delete();
        return redirect('/managefootersection')->with('session', 'Data Deleted Successfully');
    }

    public function editfooternewsletter($id)
    {
        $newsletter = FooterNewsletterSection::where('id', $id)->first();
        return view('admin.footer.editfooternewsletter', ['newsletter' => $newsletter]);
    }
    public function  updatefooternewsletter(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'titletext' => 'required',
            'email' => 'required',
        ]);

        $FooterNewsletterSection = FooterNewsletterSection::where('id', $id)->first();
        $FooterNewsletterSection->title = $request->title;
        $FooterNewsletterSection->text = $request->titletext;
        $FooterNewsletterSection->email = $request->email;
        $FooterNewsletterSection->save();
        return redirect('/managefootersection')->with('session', 'Data Updated Successfully');
    }
    public function deletefooternewsletter($id)
    {
        $foonewsletter = FooterNewsletterSection::where('id', $id)->first();
        $foonewsletter->delete();
        return redirect('/managefootersection')->with('session', 'Data Deleted Successfully');
    }

    public function editfooterfollowus($id)
    {
        $followus = FooterFollowUsSection::where('id', $id)->first();
        return view('admin.footer.editfooterfollowus', ['followus' => $followus]);
    }
    public function  updatefooterfollowus(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'titletext' => 'required',
            'fblink' => 'required',
            'instalink' => 'required',
            'whatsapp' => 'required',
        ]);

        $FooterFollowUsSection = FooterFollowUsSection::where('id', $id)->first();
        $FooterFollowUsSection->title = $request->title;
        $FooterFollowUsSection->text = $request->titletext;
        $FooterFollowUsSection->facebook = $request->fblink;
        $FooterFollowUsSection->instagram = $request->instalink;
        $FooterFollowUsSection->whatsapp = $request->whatsapp;
        $FooterFollowUsSection->save();
        return redirect('/managefootersection')->with('session', 'Data Updated Successfully');
    }
    public function deletefooterfollowus($id)
    {
        $foofollowus = FooterFollowUsSection::where('id', $id)->first();
        $foofollowus->delete();
        return redirect('/managefootersection')->with('session', 'Data Deleted Successfully');
    }

    public function editfootercopyright($id)
    {
        $copyright = FooterCopyrightSection::where('id', $id)->first();
        return view('admin.footer.editfootercopyright', ['copyright' => $copyright]);
    }
    public function  updatefootercopyright(Request $request, $id)
    {
        $request->validate([
            'copyright' => 'required',
        ]);

        $FooterCopyrightSection = FooterCopyrightSection::where('id', $id)->first();
        $FooterCopyrightSection->copyright = $request->copyright;
        $FooterCopyrightSection->save();
        return redirect('/managefootersection')->with('session', 'Data Updated Successfully');
    }
    public function deletefootercopyright($id)
    {
        $foocopyright = FooterCopyrightSection::where('id', $id)->first();
        $foocopyright->delete();
        return redirect('/managefootersection')->with('session', 'Data Deleted Successfully');
    }
}
