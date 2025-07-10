<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;
use App\TimestampsTrait;

class Role extends SpatieRole
{
    use HasFactory;
    use TimestampsTrait;

    // Accessor for created_by
    public function getCreatedByNameAttribute()
    {
        return $this->created_by ? \App\Models\User::find($this->created_by)->name : 'N/A';
    }

    // Accessor for updated_by
    public function getUpdatedByNameAttribute()
    {
        return $this->updated_by ? \App\Models\User::find($this->updated_by)->name : 'N/A';
    }

    // Accessor for created_at
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at ? $this->created_at->format('Y-m-d H:i:s') : 'N/A';
    }

    // Accessor for updated_at
    public function getFormattedUpdatedAtAttribute()
    {
        return $this->updated_at ? $this->updated_at->format('Y-m-d H:i:s') : 'N/A';
    }
}
