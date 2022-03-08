<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Member
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member query()
 */
	class Member extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Register
 *
 * @property int $id
 * @property int $cost
 * @property int $members_id
 * @property int $results_id
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|Register newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Register newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Register query()
 * @method static \Illuminate\Database\Eloquent\Builder|Register whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Register whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Register whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Register whereMembersId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Register whereResultsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Register whereUpdatedAt($value)
 */
	class Register extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Result
 *
 * @property int $id
 * @property int $sum_all
 * @property int $sum_01
 * @property int $sum_02
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|Result newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result query()
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereSum01($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereSum02($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereSumAll($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Result whereUpdatedAt($value)
 */
	class Result extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

