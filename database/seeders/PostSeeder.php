<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post([
            'title' => 'Millennials leading charge in buying pre-owned vehicles in India',
            'content'=> 'Millennials are leading the charge when it comes to buying pre-owned vehicles in the country, according to research report by online used car marketplace CARS24. The company has collaborated with leading research firm IPSOS to come out with the report which focuses on the used car buyer trends and top category drivers. The study highlights the most-compelling consumer trends and statistics with respect to the Indian used car industry. Young buyers, who account for 80 % of buyers base, are helping feed the growing field of app and web-based channels, the report stated.'
        ]);
        $post->save();
        $post = new Post([
            'title' => 'Safe, productive and climate efficient: This is how Sandvik is revolutionizing the mining industry',
            'content'=> 'The world is likely to witness growing demand for minerals and metals for economic growth, which can result in significant challenges if this climate-driven, clean energy transition is not managed responsibly and sustainably. According to a World Bank report on mining, production of minerals, such as graphite, lithium and cobalt, may go up by nearly 500 percent by 2050. To realize a lower-carbon future, the mining sector needs to evolve in a way that minimizes the environmental and climate footprint.'
        ]);
        $post->save();

        $post = new Post([
            'title' => 'Standard Digital Group Is Now Accepting Online Marketing Enquiries via Market Readiness Assistance (MRA) Grant',
            'content'=> 'With digital experts in various fields, Standard Digital is dedicated to working with you in embarking on your marketing strategies. We work together as a collaborative team to drive results with onward approaches, the latest technologies and creative techniques.

            The MRA grant will cover up to 80% of eligible costs, capped at S$100,000 per company per new market* until 31 March 2022. After which, it will revert to a 70% support level till 31 March 2023.
            Please note that retrospective applications will not be accepted. An application is deemed as retrospective if any of the following occurred prior to receiving approval from IE Singapore. Applicant has:
                Made a payment including initial deposit to the partner; or
                Signed the contractual agreement/rental agreement/purchase order with the partner or;
                Commenced the project with the partner
                Please apply and obtain approval before the appointment of consultants or commencement of projects.'
        ]);
        $post->save();

        $post = new Post([
            'title' => 'NextSense Emerges to Unlock Brain Health with Key Partners UCB, Heraeus, UC San Diego, and Emory University',
            'content'=> 'NextSense unlocks brain health with real world data insights and practical, scientific wisdom for daily living. Traditional brain health monitoring technology like EEG machines and polysomnograms are too bulky for home use, requiring patients to stay overnight at hospitals or sleep study clinics for observation. The high cost of care and lack of comfort of these devices makes long-term and continuous monitoring nearly impossible. Not only are these data based on a single timeframe, they observe what is anything but an ordinary night’s sleep. And for anyone living with epilepsy, the unpredictability of seizures makes direct observation and high-quality data-gathering exceedingly rare.'
        ]);
        $post->save();

        $post = new Post([
            'title' => 'AI in Cybersecurity: How to Cut Through the Overhype and Maximize the Potential',
            'content'=> 'Leveraging interviews with some of the engineers behind these technologies, firsthand examination and use of some of the related products, and observations of chief information security officers (CISOs) and chief information officers (CIOs), AI Uses in Blue Team Security seeks to determine whether marketing tactics obscure reality when it comes to new security technology.

            Of the 13 engineers who commented for this publication, none felt that the marketing associated with the products they were working on was completely accurate with respect to advertised capabilities. However, the engineers were optimistic about the direction they were heading and the technologies they would be creating as they relate to ML and DL.'
        ]);
        $post->save();
    }
}
