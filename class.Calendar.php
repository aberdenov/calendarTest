<?php
	class Calendar
	{
		public $inYear = 13;
		public $monthEven = 21;
		public $monthNotEven = 22;
		public $daysArray = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
		public $firstDayIndex_1990 = 1;
		public $startYear = 1990;
		public $yearDiff = 5;
		public $isVis = true;

		public function findDate($date) 
		{
			$datetime = new DateTime($date);
			$month = $datetime->format('m'); 
			$day = $datetime->format('d'); 

			if ($month / 2 == round($month / 2)) $showCountDays = $this->monthEven;
				else $showCountDays = $this->monthNotEven;

			$i = 0;
			$j = 0;
			for ($i = 1; $i <= $showCountDays; $i++)
			{	
				if ($i == $day) echo $date." - ".$this->daysArray[$j]."<br>";		

				$j++;

				if ($j == count($this->daysArray)) $j = 0;
			}
		}

		public function countMonth($date) 
		{
			$datetime = new DateTime($date);
			$year = $datetime->format('Y');

			if ($year / $this->yearDiff == round($year / $this->yearDiff)) 
			{
				$this->isVis = true;

				echo $year." - високосный год";
			} else {
				$this->isVis = false;

				echo $year." - не високосный год";
			}
		}

		public function countDays($date) 
		{
			$datetime = new DateTime($date);

			for ($i = 1; $i <= $this->inYear; $i++)
			{
				if ($i / 2 == round($i / 2)) $showCountDays = $this->monthEven;
					else $showCountDays = $this->monthNotEven;

				if ($i == $this->inYear && $this->isVis === true) $showCountDays = $showCountDays - 1;

				echo $i." месяц - ".$showCountDays." день<br>";
			}
		}
	}
?>