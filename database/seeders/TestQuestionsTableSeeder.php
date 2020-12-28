<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "house" means?', 'answer1' => 'дом', 'answer2' => 'улица', 'answer3' => 'мяч', 'answer4' => 'дорога', 'correctAnswerNumber' => '1', 'relatedTopic' => '1']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "duck" means?', 'answer1' => 'курица', 'answer2' => 'цыпленок', 'answer3' => 'утка', 'answer4' => 'утенок', 'correctAnswerNumber' => '3', 'relatedTopic' => '1']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "morning" means?', 'answer1' => 'вечер', 'answer2' => 'утро', 'answer3' => 'день', 'answer4' => 'ночь', 'correctAnswerNumber' => '2', 'relatedTopic' => '1']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "magazine" means?', 'answer1' => 'магазин', 'answer2' => 'журнал', 'answer3' => 'телефон', 'answer4' => 'рынок', 'correctAnswerNumber' => '2', 'relatedTopic' => '1']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "dog" means?', 'answer1' => 'кошка', 'answer2' => 'змея', 'answer3' => 'свинья', 'answer4' => 'собака', 'correctAnswerNumber' => '4', 'relatedTopic' => '1']
        );

        DB::table('test_questions')->insert(
            ['question' => 'Какая буква алфавита - последняя?', 'answer1' => 'X', 'answer2' => 'Y', 'answer3' => 'Z', 'answer4' => 'A', 'correctAnswerNumber' => '3', 'relatedTopic' => '2']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Какая буква алфавита - первая?', 'answer1' => 'F', 'answer2' => 'A', 'answer3' => 'D', 'answer4' => 'B', 'correctAnswerNumber' => '2', 'relatedTopic' => '2']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Сколько букв в английском алфавите?', 'answer1' => '24', 'answer2' => '25', 'answer3' => '26', 'answer4' => '27', 'correctAnswerNumber' => '3', 'relatedTopic' => '2']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Сколько гласных букв в английском алфавите?', 'answer1' => '5', 'answer2' => '6', 'answer3' => '7', 'answer4' => '8', 'correctAnswerNumber' => '2', 'relatedTopic' => '2']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Назовите следующую букву в алфавите: FGHIJ...', 'answer1' => 'K', 'answer2' => 'M', 'answer3' => 'O', 'answer4' => 'L', 'correctAnswerNumber' => '1', 'relatedTopic' => '2']
        );

        DB::table('test_questions')->insert(
            ['question' => 'What is the third form of verb "buy"?', 'answer1' => 'buy', 'answer2' => 'buyed', 'answer3' => 'bought', 'answer4' => 'buying', 'correctAnswerNumber' => '3', 'relatedTopic' => '3']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What is the third form of verb "forget?"', 'answer1' => 'forgot', 'answer2' => 'forgetted', 'answer3' => 'forgotten', 'answer4' => 'forgetten', 'correctAnswerNumber' => '3', 'relatedTopic' => '3']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What is the second form of verb "do"?', 'answer1' => 'done', 'answer2' => 'did', 'answer3' => 'doed', 'answer4' => 'doing', 'correctAnswerNumber' => '2', 'relatedTopic' => '3']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What is the second form of verb "catch"', 'answer1' => 'cought', 'answer2' => 'caught', 'answer3' => 'catched', 'answer4' => 'catching', 'correctAnswerNumber' => '2', 'relatedTopic' => '3']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Is the verb "go" irregular?', 'answer1' => 'yes', 'answer2' => 'no', 'answer3' => 'it depends on context', 'answer4' => 'No correct answer', 'correctAnswerNumber' => '1', 'relatedTopic' => '3']
        );

        DB::table('test_questions')->insert(
            ['question' => 'Maria __ to school every day. Choose correct option:', 'answer1' => 'going', 'answer2' => 'is going', 'answer3' => 'goes', 'answer4' => 'went', 'correctAnswerNumber' => '3', 'relatedTopic' => '4']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Does Jack __ football today? Choose correct option:', 'answer1' => 'was playing', 'answer2' => 'had played', 'answer3' => 'play', 'answer4' => 'playing', 'correctAnswerNumber' => '3', 'relatedTopic' => '4']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Who ___ (live) in London nowadays? Choose correct option:', 'answer1' => 'is living', 'answer2' => 'had been lived', 'answer3' => 'live', 'answer4' => 'lives', 'correctAnswerNumber' => '4', 'relatedTopic' => '4']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Who __ (play) volleyball this weekend?', 'answer1' => 'play', 'answer2' => 'plays', 'answer3' => 'had played', 'answer4' => 'was playing', 'correctAnswerNumber' => '2', 'relatedTopic' => '4']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I (to be) nineteen years old.', 'answer1' => 'am', 'answer2' => 'is', 'answer3' => 'are', 'answer4' => 'were', 'correctAnswerNumber' => '1', 'relatedTopic' => '4']
        );

        DB::table('test_questions')->insert(
            ['question' => 'He __(play) the computer yesterday.', 'answer1' => 'played', 'answer2' => 'playing', 'answer3' => 'play', 'answer4' => 'plays', 'correctAnswerNumber' => '1', 'relatedTopic' => '5']
        );
        DB::table('test_questions')->insert(
            ['question' => '__(do) he play the computer yesterday?', 'answer1' => 'Was', 'answer2' => 'Did', 'answer3' => 'Were', 'answer4' => 'Does', 'correctAnswerNumber' => '2', 'relatedTopic' => '5']
        );
        DB::table('test_questions')->insert(
            ['question' => 'James __(to be) born in 1998.', 'answer1' => 'were', 'answer2' => 'was', 'answer3' => 'did', 'answer4' => 'is', 'correctAnswerNumber' => '2', 'relatedTopic' => '5']
        );
        DB::table('test_questions')->insert(
            ['question' => 'They __ (leave) Hong Kong and went back to Britain.', 'answer1' => 'left', 'answer2' => 'leaved', 'answer3' => 'did leave', 'answer4' => 'leaving', 'correctAnswerNumber' => '1', 'relatedTopic' => '5']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Why __(do) you phone her at the middle of the night?', 'answer1' => 'do', 'answer2' => 'does', 'answer3' => 'done', 'answer4' => 'did', 'correctAnswerNumber' => '4', 'relatedTopic' => '5']
        );

        DB::table('test_questions')->insert(
            ['question' => 'He __(start) business next month.', 'answer1' => 'start', 'answer2' => 'starts', 'answer3' => 'will start', 'answer4' => 'is starting', 'correctAnswerNumber' => '3', 'relatedTopic' => '6']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I (not, go) to Spain next weekend.', 'answer1' => 'will not go', 'answer2' => 'am not go', 'answer3' => 'do not go', 'answer4' => 'did', 'correctAnswerNumber' => '1', 'relatedTopic' => '6']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I (read) a novel tomorrow.', 'answer1' => 'would read', 'answer2' => 'will read', 'answer3' => 'am read', 'answer4' => 'do read', 'correctAnswerNumber' => '2', 'relatedTopic' => '6']
        );
        DB::table('test_questions')->insert(
            ['question' => 'It __(rain) soon.', 'answer1' => 'will rain', 'answer2' => 'is raining', 'answer3' => 'rain', 'answer4' => 'rains', 'correctAnswerNumber' => '1', 'relatedTopic' => '6']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I __(launch) an English lesson soon.', 'answer1' => 'launch', 'answer2' => 'am launch', 'answer3' => 'is launch', 'answer4' => 'will launch', 'correctAnswerNumber' => '4', 'relatedTopic' => '6']
        );

        DB::table('test_questions')->insert(
            ['question' => 'What happened in 1066?', 'answer1' => 'The battle of Hastings', 'answer2' => 'The battle of Trafalgar', 'answer3' => 'The birth of William Shakespeare', 'answer4' => 'none of the above', 'correctAnswerNumber' => '1', 'relatedTopic' => '7']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What was The War Of The Roses?', 'answer1' => 'The battle between Yorks and Lankasters.', 'answer2' => 'The battle of Hastings', 'answer3' => 'The battle of Trafalgar', 'answer4' => 'none of the above', 'correctAnswerNumber' => '1', 'relatedTopic' => '7']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What was the personal motto of Elizabeth 1?', 'answer1' => 'I saw the death of people.', 'answer2' => 'I came, I saw, I conquered.', 'answer3' => 'I see but I say nothing', 'answer4' => 'none of the above', 'correctAnswerNumber' => '3', 'relatedTopic' => '7']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What was William Shakespeare famous for?', 'answer1' => 'His beatboxing skills', 'answer2' => 'Writing songs', 'answer3' => 'Writing plays', 'answer4' => 'none of the above', 'correctAnswerNumber' => '3', 'relatedTopic' => '7']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What happened at the battle of Waterloo?', 'answer1' => 'Napoleon beat Wellington.', 'answer2' => 'Wellington beat Napoleon.', 'answer3' => 'Nothing happened.', 'answer4' => 'none of the above', 'correctAnswerNumber' => '2', 'relatedTopic' => '7']
        );

        DB::table('test_questions')->insert(
            ['question' => 'I thought there __ (be) cars before 1930s.', 'answer1' => 'would be', 'answer2' => 'will be', 'answer3' => 'was', 'answer4' => 'are', 'correctAnswerNumber' => '1', 'relatedTopic' => '8']
        );
        DB::table('test_questions')->insert(
            ['question' => 'She promised that she __(come) to my party.', 'answer1' => 'will come', 'answer2' => 'come', 'answer3' => 'came', 'answer4' => 'would come', 'correctAnswerNumber' => '4', 'relatedTopic' => '8']
        );
        DB::table('test_questions')->insert(
            ['question' => 'David said that he __ (go, to bring) his camera with him, but he forgot.', 'answer1' => 'were going to bring', 'answer2' => 'was going to bring', 'answer3' => 'is going to bring', 'answer4' => 'went to bring', 'correctAnswerNumber' => '2', 'relatedTopic' => '8']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I had a feeling it __ (be) a disaster.', 'answer1' => 'would be', 'answer2' => 'will be', 'answer3' => 'can be', 'answer4' => 'is', 'correctAnswerNumber' => '1', 'relatedTopic' => '8']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I knew Eric __ (make) dinner tonight.', 'answer1' => 'will make', 'answer2' => 'would make', 'answer3' => 'should make', 'answer4' => 'is making', 'correctAnswerNumber' => '2', 'relatedTopic' => '8']
        );

        DB::table('test_questions')->insert(
            ['question' => 'If you _(go) out with your friends tonight, I _(watch) the football match on TV', 'answer1' => 'will go/will watch', 'answer2' => 'go/watch', 'answer3' => 'go/will watch', 'answer4' => 'will go/watch', 'correctAnswerNumber' => '3', 'relatedTopic' => '9']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I _(earn) a lot of money if I _(get) that job', 'answer1' => 'will earn/will get', 'answer2' => 'earn/get', 'answer3' => 'earn/will get', 'answer4' => 'none of the above', 'correctAnswerNumber' => '4', 'relatedTopic' => '9']
        );
        DB::table('test_questions')->insert(
            ['question' => 'If he _(try) harder, he _(reach) his goals.', 'answer1' => 'try/reach', 'answer2' => 'would tried/reached', 'answer3' => 'tried/would reached', 'answer4' => 'none of the above', 'correctAnswerNumber' => '3', 'relatedTopic' => '9']
        );
        DB::table('test_questions')->insert(
            ['question' => 'If we _(listen) to the radio, we _(hear) the news.', 'answer1' => 'had listened/would have heard', 'answer2' => 'would have listened/had heard', 'answer3' => 'both are right', 'answer4' => 'none of them', 'correctAnswerNumber' => '1', 'relatedTopic' => '9']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I _(buy) these shoes if they _(fit) .', 'answer1' => 'bought/would fitted', 'answer2' => 'would bought/fitted', 'answer3' => 'bought/fitted', 'answer4' => 'none of the above', 'correctAnswerNumber' => '2', 'relatedTopic' => '9']
        );

        DB::table('test_questions')->insert(
            ['question' => 'What does the word "dry" means?', 'answer1' => 'влажный', 'answer2' => 'сухой', 'answer3' => 'промокший', 'answer4' => 'мягкий', 'correctAnswerNumber' => '2', 'relatedTopic' => '10']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "foggy" means', 'answer1' => 'морозный', 'answer2' => 'свежий', 'answer3' => 'туманный', 'answer4' => 'облачный', 'correctAnswerNumber' => '3', 'relatedTopic' => '10']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "cloudy" means', 'answer1' => 'морозный', 'answer2' => 'свежий', 'answer3' => 'туманный', 'answer4' => 'облачный', 'correctAnswerNumber' => '4', 'relatedTopic' => '10']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "whirlwind" means', 'answer1' => 'ураган', 'answer2' => 'торнадо', 'answer3' => 'смерч', 'answer4' => 'все ответы верны', 'correctAnswerNumber' => '4', 'relatedTopic' => '10']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What does the word "lightning" means', 'answer1' => 'гроза', 'answer2' => 'молния', 'answer3' => 'дождь', 'answer4' => 'буря', 'correctAnswerNumber' => '2', 'relatedTopic' => '10']
        );

        DB::table('test_questions')->insert(
            ['question' => 'I _ (work) all day, so I did not want to go out.', 'answer1' => 'has been working', 'answer2' => 'worked', 'answer3' => 'had worked', 'answer4' => 'had been working', 'correctAnswerNumber' => '4', 'relatedTopic' => '11']
        );
        DB::table('test_questions')->insert(
            ['question' => 'She _(sleep) for ten hours when I woke her.', 'answer1' => 'slept', 'answer2' => 'sleeped', 'answer3' => 'had been sleeping', 'answer4' => 'has been sleeping', 'correctAnswerNumber' => '3', 'relatedTopic' => '11']
        );
        DB::table('test_questions')->insert(
            ['question' => 'They _(live) in Beijing for three years when he lost his job.', 'answer1' => 'had been living', 'answer2' => 'have been living', 'answer3' => 'had lived', 'answer4' => 'lived', 'correctAnswerNumber' => '1', 'relatedTopic' => '11']
        );
        DB::table('test_questions')->insert(
            ['question' => 'When we met, you _(work) at that company for six months.', 'answer1' => 'has been working', 'answer2' => 'have been working', 'answer3' => 'had been working', 'answer4' => 'had worked', 'correctAnswerNumber' => '3', 'relatedTopic' => '11']
        );
        DB::table('test_questions')->insert(
            ['question' => 'I was really tired because I _(study)', 'answer1' => 'had been studying', 'answer2' => 'have been studying', 'answer3' => 'had studied', 'answer4' => 'studied', 'correctAnswerNumber' => '1', 'relatedTopic' => '11']
        );

        DB::table('test_questions')->insert(
            ['question' => 'When do the Irish celebrate St. Patrick Day?', 'answer1' => '5 May', 'answer2' => '17 April', 'answer3' => '17 March', 'answer4' => 'none of the above', 'correctAnswerNumber' => '3', 'relatedTopic' => '12']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What is the longest river in the UK?', 'answer1' => 'Severn', 'answer2' => 'Trent', 'answer3' => 'Great Ouse', 'answer4' => 'The Thames', 'correctAnswerNumber' => '1', 'relatedTopic' => '12']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What is the highest mountain in the United Kingdom?', 'answer1' => 'Ben Macdhui', 'answer2' => 'Ben Nevis', 'answer3' => 'Scafell Pike', 'answer4' => 'Snowdon', 'correctAnswerNumber' => '2', 'relatedTopic' => '12']
        );
        DB::table('test_questions')->insert(
            ['question' => 'What do they celebrate in Britain on 5th November?', 'answer1' => 'Guy Fawkes Night', 'answer2' => 'Halloween', 'answer3' => 'Notting Hill Carnival', 'answer4' => 'St. Patrick Day', 'correctAnswerNumber' => '1', 'relatedTopic' => '12']
        );
        DB::table('test_questions')->insert(
            ['question' => 'Where is Loch Ness?', 'answer1' => 'England', 'answer2' => 'Ireland', 'answer3' => 'Scotland', 'answer4' => 'Wales', 'correctAnswerNumber' => '3', 'relatedTopic' => '12']
        );
    }
}
