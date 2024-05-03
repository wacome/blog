namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Category;

class WelcomeComposer
{
    public function compose(View $view)
    {
        $view->with('categories', Category::all());
    }
}
