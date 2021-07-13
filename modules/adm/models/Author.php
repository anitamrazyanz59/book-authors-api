<?php

namespace app\modules\adm\models;
use app\modules\bam\models\Book;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%authors}}".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Book[] $books
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%authors}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::class, ['author_id' => 'id']);
    }
}
