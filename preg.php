<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 22.07.2018
 * Time: 19:00
 */
/**$str = "   15-10/1997";

$re = '{
    ^\s*(
        (\d+)
        \s* [[:punct:]] \s*
        (\d+)
        \s* [[:punct:]] \s*
        (\d+)
        ) \s*$
        }xs';
preg_match($re, $str, $matches) or die("Not a date: $str");
foreach ($matches as $v)
    echo "Date: ".$v."<br>";
*/
/**$text = htmlspecialchars(file_get_contents(__FILE__));
$html = preg_replace('/(\$[a-zA-Z]\w*)/is', '<b>$1</b>', $text);
echo "<pre> $html </pre>";*/
/**$str = "2015-12-11";
$re =  '|^(?:\d{4})-(?:\d{2})-(\d{2})$|';
preg_match($re, $str, $matches) or die ("DIE ANTWOOD");
echo htmlspecialchars("Day: ".$matches[1]);
*/
$text = 'Ссылка: (http://thematrix.com), www.ru?"a"=b, http://lozhki.net.';
echo hrefActivate($text);
// Заменяет ссылки на их HTML-эквиваленты ("подчеркивает ссылки").
function hrefActivate($text)
{
    return preg_replace_callback(
        '{
        (?:
          (\w+://)          # протокол с двумя слэшами
          |                 # - или -
          www\.             # просто начинается на www
        )
        [\w-]+(\.[\w-]+)*   # имя хоста
        (?: : \d+)?         # порт (не обязателен)
        [^<>"\'()\[\]\s]*   # URI (но БЕЗ кавычек и скобок)
        (?:                 # последний символ должен быть...
            (?<! [[:punct:]] )  # НЕ пунктуацией
          | (?<= [-/&+*]     )  # но допустимо окончание на -/&+*
        )
      }xis',
        function ($p) {
            // Преобразуем спецсимволы в HTML-представление.
            $name = htmlspecialchars($p[0]);
            // Если нет протокола, добавляем его в начало строки.
            $href = !empty($p[1])? $name : "http://$name";
            // Формируем ссылку.
            return "<a href=\"$href\">$name</a>";
        },
        $text
    );
}