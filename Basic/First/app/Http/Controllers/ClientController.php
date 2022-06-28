<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::create([
            "name" => "Client Three",
            "email" => "Client3@mail.com",
            "password" => bcrypt("123"),
            "age" => 32,
            "bio" => "Client Two bio",
        ]);

        return $client;
        // $client = new Client();
        // $client->name = "Client One";
        // $client->email = "Client@mail.com";
        // $client->password = bcrypt("123");
        // $client->age = 22;
        // $client->bio = "bio";

        // $client->save();

        // return $client;
    }


    public function fetch()
    {
        // return Client::latest('id')->get();
        // return Client::whereAge(22)->get();
        //  return Client::where('age',">",22)->get();

        // return Client::whereBetween('age',[10,30])->first();

        return Client::findOrFail(5);
    }

    public function update()
    {
        // $data = Client::find(1)->update([
        //     "name" => "Another Update"
        // ]);
        $data = Client::find(1);

        $data->update([
            "name" => "Update Name"
        ]);
        // $data->name = "Update Name";

        // $data->save();
        return $data;
    }

    public function delete()
    {
    //    return Client::where('age',">",25)->delete();

    // return Client::withTrashed()->get()->count();
       return Client::withTrashed() ->where('id', 1)->history()->restore();
    }
}
