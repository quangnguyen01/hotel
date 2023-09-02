<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store (ContactRequest $request) {
        $contact = new Contact();
        $contact->fill($request->validated());
        $contact->save();
        return redirect()->back()->with('success', 'Gửi liên hệ thành công');
    }

    public function list (Request $request) {
        $queryBuilder = Contact::query();
        $search = $request->get('search');
        $sort = (int) $request->get('sort');
        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('subject', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        $data = $queryBuilder->orderBy('created_at','DESC')->paginate(10)->appends(['search' => $search]);
        return view('admin.contacts.table', [
            'contacts' => $data,
            'sort' => $sort
        ]);
    }

    public function delete($id)
    {
        $delete = Contact::find($id);
        $delete->delete();
        return redirect()->route('listContact')
            ->with('success', 'Delete thành công.');
    }
}
