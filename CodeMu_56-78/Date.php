<?php
class Date
{
    private $date;

    public function __construct($date = null)
    {
        // если дата не передана - пусть берется текущая
        if (!empty($date)) {
            $this->date = date('Y-m-d', strtotime($date));
        } else {
            $this->date = date('Y-m-d', time());
        }
    }

    public function getDay()
    {
        // возвращает день
        return date('d', strtotime($this->date));

    }

    public function getMonth($lang = null)
    {
        $ruMonths =  [1 => 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' ];
        $engMonths = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $dateMonth = date('n', strtotime($this->date));
        // возвращает месяц
        if (empty($lang)) {
            return date('m', strtotime($this->date));
        }

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
        if ($lang == 'ru') {
            return $ruMonths[$dateMonth];
        }
        if ($lang == 'en') {
            return $engMonths[$dateMonth];
        }
    }

    public function getYear() // возвращает год
    {
        return date('Y', strtotime($this->date));

    }

    public function getWeekDay($lang = null) 
    {
        $daysRu =  [1 => 'Понедельник' , 'Вторник' , 'Среда' , 'Четверг' , 'Пятница' , 'Суббота' , 'Воскресенье'] ;
        $daysEn =  [1 => 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $dateDay = date('w', strtotime($this->date));
        // возвращает день недели
        if (empty($lang)) {
            return date('w', strtotime($this->date));
        }
        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
        if ($lang == 'ru') {
            return $daysRu[$dateDay];
        }
        if ($lang == 'en') {
            return $daysEn[$dateDay];
        }
    }

    public function addDay($value)
    {
        // добавляет значение $value к дню
        $dateM = date_create($this->date);
        date_modify($dateM, "+$value days");
        return date_format($dateM, 'Y-m-d');
    }

    public function subDay($value) // отнимает значение $value от дня
    {
        $dateM = date_create($this->date);
        date_modify($dateM, "-$value days");
        return date_format($dateM, 'Y-m-d');
    }

    public function addMonth($value) // добавляет значение $value к месяцу
    {
        $dateM = date_create($this->date);
        date_modify($dateM, "+$value month");
        return date_format($dateM, 'Y-m-d');
    }

    public function subMonth($value) // отнимает значение $value от месяца
    {
        $dateM = date_create($this->date);
        date_modify($dateM, "-$value month");
        return date_format($dateM, 'Y-m-d');
    }

    public function addYear($value) // добавляет значение $value к году
    {
        $dateM = date_create($this->date);
        date_modify($dateM, "+$value year");
        return date_format($dateM, 'Y-m-d');
    }

    public function subYear($value) // отнимает значение $value от года
    {
        $dateM = date_create($this->date);
        date_modify($dateM, "-$value year");
        return date_format($dateM, 'Y-m-d');
    }

    public function format($format)
    {
        // выведет дату в указанном формате
        // формат пусть будет такой же, как в функции date
        return date($format, strtotime($this->date));
    }

    public function __toString()
    {
        // выведет дату в формате 'год-месяц-день'
        return $this->date;
    }
}