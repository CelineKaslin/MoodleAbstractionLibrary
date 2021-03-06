<?php

namespace Avado\MoodleAbstractionLibrary\Entities;

/**
 * Class Enrol
 * @package Avado\MoodleAbstractionLibrary\Entities
 */
class Enrol extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'enrol';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'roleid', 'id');
    }

    /**
     * Get the all course based on enrollment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class,'courseid','id');
    }
}
