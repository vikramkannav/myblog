<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\ValidationTrait;
use App\Traits\EventCallbackTrait;
use App\Traits\ObjectJsonBuilder;
use App\Events\EventCreatingCallback;
use App\Events\EventCreatedCallback;
use App\Events\EventSavingCallback;
use App\Events\EventSavedCallback;
use App\Events\EventUpdatingCallback;
use App\Events\EventUpdatedCallback;
use App\Events\EventDeletingCallback;
use App\Events\EventDeletedCallback;
use App\Events\EventRestoringCallback;
use App\Events\EventRestoredCallback;

class UserBaseModel extends Authenticatable
{
    use HasApiTokens,Notifiable;
    use ValidationTrait, EventCallbackTrait, ObjectJsonBuilder;

    protected $dispatchesEvents = [
        'creating' => EventCreatingCallback::class,
        'created' => EventCreatedCallback::class,
        'updating' => EventUpdatingCallback::class,
        'updated' => EventUpdatedCallback::class,
        'saving' => EventSavingCallback::class,
        'saved' => EventSavedCallback::class,
        'deleting' => EventDeletingCallback::class,
        'deleted' => EventDeletedCallback::class,
        'restoring' => EventRestoringCallback::class,
        'restored' => EventRestoredCallback::class,
    ];

    // set the uuid to every record save.
    public function creating_event()
    {
        if (!$this->get_skip_validation())
        {
            return $this->validateObject();
        }

        return true;
    }

    // set the uuid to every record save.
    public function updating_event()
    {
        if (!$this->get_skip_validation())
        {
            return $this->validateObject();
        }
        
        return true;
    }
    public function saving_event()
    {
        if (!$this->get_skip_validation())
        {
            return $this->validateObject();
        }

        return true;
    }
//==============profile pic===============
    public function base64ToImage($imageData, $img=''){
        list($type, $imageData) = explode(';', $imageData);
        list(,$extension) = explode('/',$type);
        list(,$imageData)      = explode(',', $imageData);
        $fileName = uniqid().'.'.$extension;
        $imageData = base64_decode($imageData);
        file_put_contents(public_path() . "/storage/".$fileName, $imageData);
        return $fileName;
    }


}
