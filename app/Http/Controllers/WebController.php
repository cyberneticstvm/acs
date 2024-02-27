<?php

namespace App\Http\Controllers;

use App\Mail\BlogCommentEmail;
use App\Mail\ContactUsEmail;
use App\Mail\RequestCallbackEmail;
use App\Models\Blog;
use App\Models\Callback;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    protected $email;

    public function __construct()
    {
        $this->email = 'mkt@auregagroup.com';
        //$this->email = 'mail@cybernetics.me';
    }

    function index()
    {
        $title = "Business Setup in Dubai | Company Formation in UAE | Aurega";
        $description = "Your Gateway to Seamless Business Setup in UAE | Discover a seamless business setup experience in UAE with Aurega Group. Your trusted gateway to success.";
        $keywords = "business setup dubai, company formation in dubai, business set up in uae, company setup dubai, business setup uae, business setup services in dubai, business set up companies in uae, business setup in dubai uae";
        $canonical_url = "https://www.auregacs.com";
        $blogs = Blog::where('type', 'Blog')->where('status', 1)->latest()->limit(5)->get();
        $services = Category::all();
        return view('web.index', compact('title', 'description', 'keywords', 'canonical_url', 'blogs', 'services'));
    }

    function about()
    {
        $title = 'Aurega Corporate Services - About';
        $canonical_url = "https://www.auregacs.com/about";
        $description = "About Aurega Corporate Services in Dubai UAE";
        $keywords = "";
        return view('web.about', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function freezone()
    {
        $title = 'Free Zone Company Set Up in the UAE';
        $canonical_url = "https://www.auregacs.com/uae-free-zone";
        $description = "Aurega Corporate Services - Free Zone Company Set Up in the UAE";
        $keywords = "";
        return view('web.uae-free-zone', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function mainland()
    {
        $title = 'Mainland Company Formation in Dubai';
        $canonical_url = "https://www.auregacs.com/uae-mainland";
        $description = "Aurega Corporate Services - Mainland Company Formation in Dubai";
        $keywords = "";
        return view('web.uae-mainland', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function offshore()
    {
        $title = 'Best Offshore Company Setup in Dubai';
        $canonical_url = "https://www.auregacs.com/uae-offshore";
        $description = "Aurega Corporate Services - Best Offshore Company Setup in Dubai";
        $keywords = "";
        return view('web.uae-offshore', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function company()
    {
        $title = 'Company Incorporation in Dubai, UAE | Commercial License | UAE';
        $canonical_url = "https://www.auregacs.com/services/company-incorporation-and-trade-license";
        $description = "Unlock your business potential in Dubai with a streamlined business trade license in Dubai from Aurega Group. Take your business to the next level.";
        $keywords = "trade licence in dubai, business license in dubai, commercial license in dubai, dubai business license, online business license dubai, trading licence in uae";
        return view('web.services.company-incorporation', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function visa()
    {
        $title = 'Golden Visa in Dubai | Residence Visa | Visa For Students';
        $canonical_url = "https://www.auregacs.com/services/golden-visa";
        $description = "Open doors to boundless opportunities with the Golden Visa Dubai. Let Aurega Group guide you towards a ten-year residency and golden visa for students.";
        $keywords = "golden visa requirements uae, golden visa dubai, golden visa in uae, golden visa for students, golden residency uae";
        return view('web.services.golden-visa', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function business()
    {
        $title = 'Business Setup Consultants in Dubai |Consulting Firm | UAE ';
        $canonical_url = "https://www.auregacs.com/services/business-consulting";
        $description = "Unleash Your Potential with Top-notch Business Setup Consultants in Dubai | Unlock new heights of success with the best Business Consultancy Services.";
        $keywords = "business setup consultants in dubai, business consultancy services dubai, business setup consultants in uae";
        return view('web.services.business-consulting', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function pro()
    {
        $title = 'Best PRO Services in Dubai ,UAE | Corporate PRO Services';
        $canonical_url = "https://www.auregacs.com/services/pro-service";
        $description = "Streamline your success in Dubai with best PRO service in Dubai from Aurega Group. Navigate administrative processes with ease.Contact Us Now !";
        $keywords = "pro services dubai, best pro services in dubai, pro services in uae, pro services in abu dhabi, corporate pro services, pro company in uae, pro services in ajman";
        return view('web.services.pro-service', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function trademark()
    {
        $title = 'Trademark Registration Companies in UAE | Aurega';
        $canonical_url = "https://www.auregacs.com/services/trademark-registration-and-intellectual-property";
        $description = "Protect your intellectual property with Aurega's expert trademark registration services. Safeguard your assets and brand identity. Learn more!";
        $keywords = "trademark registration uae, trademark registration in dubai, trademark registration companies in uae";
        return view('web.services.trademark-registration', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function hr()
    {
        $title = 'HR and Recruitment in UAE | Aurega';
        $canonical_url = "https://www.auregacs.com/services/hr-and-recruitment";
        $description = "HR and Recruitment consultants in UAE";
        $keywords = "HR, Recruitment, Human Resource companies in uae";
        return view('web.services.hr', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function digital()
    {
        $title = 'Digital Marketing & Web Development in UAE | Aurega';
        $canonical_url = "https://www.auregacs.com/services/digital-merkting-and-software-consulting";
        $description = "Digital Marketing and Software Consultants in UAE";
        $keywords = "Digital Marketing, Software Consulting, Web Development, Software Development, Mobile App Development";
        return view('web.services.digital', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function partners()
    {
        $title = 'Aurega Corporate Services - Partners';
        $canonical_url = "https://www.auregacs.com/partners";
        $description = "Partners Aurega Corporate Services in Dubai UAE";
        $keywords = "";
        return view('web.resources.partners', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function members()
    {
        $title = 'Aurega Corporate Services - Members';
        $canonical_url = "https://www.auregacs.com/members";
        $description = "Members Aurega Corporate Services in Dubai UAE";
        $keywords = "";
        return view('web.resources.members', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function careers()
    {
        $title = 'Aurega Corporate Services - Careers';
        $canonical_url = "https://www.auregacs.com/careers";
        $description = "Careers Aurega Corporate Services in Dubai UAE";
        $keywords = "";
        return view('web.resources.careers', compact('title', 'canonical_url', 'description', 'keywords'));
    }

    function blogs($type)
    {
        $title = 'Aurega Corporate Services - Blogs';
        $canonical_url = "https://www.auregacs.com/blogs/" . $type;
        $description = "Blogs Aurega Corporate Services in Dubai UAE";
        $keywords = "";
        $blogs = Blog::where('type', $type)->where('status', 1)->latest()->paginate(10);
        return view('web.resources.blogs', compact('title', 'canonical_url', 'description', 'keywords', 'blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->latest()->firstOrFail();
        $title = $blog->title;
        $canonical_url = "https://www.auregacs.com/resources/blog/" . $slug;
        $description = $blog->description;
        $keywords = $blog->keywords;
        $blogs = Blog::where('id', '!=', $blog->id)->where('type', 'Blog')->where('status', 1)->latest()->limit(10)->get();
        return view('web.resources.blog', compact('title', 'canonical_url', 'description', 'keywords', 'blog', 'blogs'));
    }

    function contact()
    {
        $title = 'Aurega Corporate Services - Contact';
        $canonical_url = "https://www.auregacs.com/contact";
        $description = "Contact Aurega Corporate Services in Dubai UAE";
        $keywords = "";
        $services = Category::all();
        return view('web.contact', compact('title', 'canonical_url', 'description', 'keywords', 'services'));
    }

    function callback(Request $request)
    {
        $this->validate($request, [
            'email_mobile' => 'required',
        ]);
        try {
            $input = $request->all();
            Callback::create($input);
            Mail::to($this->email)->send(new RequestCallbackEmail($request));
        } catch (Exception $e) {
            return redirect()->route('response.message')->with("error", $e->getMessage());
        }
        return redirect()->route('response.message')->with("success", "We have recieved your callback request successfully. Our team will reach out you shortly.");
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'contact_number' => 'required',
            'message' => 'required',
            'service' => 'required',
        ]);
        try {
            $input = $request->all();
            $contact = Contact::create($input);
            Mail::to($this->email)->send(new ContactUsEmail($contact));
        } catch (Exception $e) {
            return redirect()->route('response.message')->with("error", $e->getMessage());
        }
        return redirect()->route('response.message')->with("success", "We have recieved your message successfully. Our team will reach out you shortly.");
    }

    public function blogComment(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfs,dns',
            'contact_number' => 'required',
            'comment' => 'required',
        ]);
        try {
            $blog = Blog::findOrFail(decrypt($request->blog_id));
            $input = $request->all();
            $input['blog_id'] = $blog->id;
            $input['status'] = 'pending';
            $owner = Comment::create($input);
            Mail::to($this->email)->send(new BlogCommentEmail($owner));
        } catch (Exception $e) {
            return redirect()->route('response.message')->with("error", $e->getMessage());
        }
        return redirect()->route('response.message')->with("success", "Comments posted successfully.");
    }

    function responseMessage()
    {
        $title = "Aurega Corporate Service - Response Message";
        $keywords = "Business Setup, Golden Visa, Company Incorporation";
        $description = "Aurega Corporate Service";
        $canonical_url = "https://www.auregacs.com/response";
        return view('web.response', compact('title', 'keywords', 'description', 'canonical_url'));
    }

    public function sitemap()
    {
        return response()->view('web.sitemap')->header('Content-Type', 'text/xml');
    }

    public function robots()
    {
        return response()->view('web.robots')->header('Content-Type', 'text/plain');
    }
}
