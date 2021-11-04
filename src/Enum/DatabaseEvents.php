<?php

namespace Caiocesar173\Utils\Enum;


class DatabaseEvents
{
    #Will be added when an existing model whas retrived from the database
    const RETRIEVED    = 'retrieved'; 
    
    #When the model is saved from the first time
    const CREATING     = 'creating';
    const CREATED      = 'created';
    
    #Case already exists a model and SaveMethod is called
    const UPDATING     = 'updating';
    const UPDATED      = 'updated';
    
    #Every time something is sent to DataBasae
    const SAVING       = 'saving';
    const SAVED        = 'saved';

    const RESTORING    = 'restoring';
    const RESTORED     = 'restored';
    
    const REPLICATING  = 'replicating';
    const DELETING     = 'deleting';
    const DELETED      = 'deleted';
    const FORCEDELETED = 'forceDeleted';

}