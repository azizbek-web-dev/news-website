<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $categories = Category::all();

        $posts = [
            // Politics Posts
            [
                'title' => 'Breaking: New Political Reform Announced',
                'content' => 'The government has announced a major political reform that will affect millions of citizens across the nation. This comprehensive reform package represents the most significant overhaul of the political system in decades, addressing long-standing issues that have plagued the democratic process for years. The reforms include substantial changes to voting procedures, making it easier for citizens to participate in elections through expanded early voting, online registration, and same-day registration options. Campaign finance laws are being completely rewritten to limit corporate influence and increase transparency in political funding. The new legislation mandates that all political donations above $200 must be publicly disclosed within 48 hours, and corporate donations are now capped at $5,000 per election cycle. Transparency measures include mandatory disclosure of all government contracts, public access to legislative voting records, and real-time tracking of lobbyist activities. The announcement comes after months of intensive consultation with various stakeholders including civil rights organizations, business leaders, academic experts, and citizen advocacy groups. The implementation timeline spans over the next two years, with the first phase focusing on voting procedure improvements, followed by campaign finance reforms, and concluding with transparency initiatives. This reform package has received widespread bipartisan support and is expected to restore public confidence in the political system while ensuring fair and accessible elections for all citizens.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Election Results: Historic Victory for Progressive Party',
                'content' => 'In a historic election that saw record voter turnout exceeding 75% of eligible voters, the Progressive Party has secured a decisive victory with 58% of the popular vote and control of both houses of Congress. This represents the most significant shift in political landscape in over 40 years, as voters across all demographics expressed overwhelming support for environmental policies, social justice reforms, and economic equality measures. The Progressive Party\'s platform focused heavily on climate action, promising to achieve net-zero carbon emissions by 2035 through massive investments in renewable energy infrastructure, electric vehicle incentives, and green job creation programs. Social justice reforms include comprehensive police reform legislation, criminal justice system overhaul, and expanded civil rights protections for marginalized communities. Economic equality measures feature a progressive tax system restructuring, minimum wage increases to $15 per hour, universal healthcare expansion, and free college tuition for public universities. The new government, led by the youngest president in modern history, is expected to implement these major policy changes within the first 100 days of taking office. International observers have praised the election as a model of democratic participation, with particularly high turnout among young voters and minority communities who were previously underrepresented in the political process.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a78e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'International Summit Addresses Climate Crisis',
                'content' => 'World leaders from 195 countries gathered for an unprecedented three-day summit focused on addressing the global climate crisis, marking the most significant international environmental conference in history. The summit, held in a carbon-neutral venue powered entirely by renewable energy, resulted in historic agreements that go far beyond previous climate accords. Carbon reduction targets were set at 50% below 2010 levels by 2030, with complete carbon neutrality achieved by 2050. Renewable energy investments totaling $2.5 trillion over the next decade were pledged, with developed nations committing to provide financial and technological support to developing countries. International cooperation mechanisms include a new global carbon trading system, shared research and development initiatives, and coordinated disaster response protocols. The commitments made represent the most ambitious climate action plan in human history, with binding enforcement mechanisms and regular progress reviews every two years. Additionally, the summit established new international standards for sustainable development, ocean conservation, and biodiversity protection. The agreements include specific provisions for supporting vulnerable communities most affected by climate change, with a $100 billion annual fund for adaptation and mitigation efforts in developing nations. This landmark summit has been hailed as a turning point in global environmental policy, with unprecedented cooperation between nations that have historically been at odds on climate issues.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1569163139394-de6e4d1b4b0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'New Healthcare Bill Passes Senate',
                'content' => 'A comprehensive healthcare reform bill has passed the Senate with overwhelming bipartisan support, promising to expand coverage to over 15 million previously uninsured citizens while reducing healthcare costs for millions more. This landmark legislation represents the most significant healthcare reform in over a decade, addressing systemic issues that have plagued the American healthcare system for generations. The bill includes extensive provisions for mental health services, with mandatory coverage for all mental health conditions, expanded access to psychiatric care, and increased funding for community mental health centers. Prescription drug price controls will cap annual increases at 2% above inflation, with the government empowered to negotiate drug prices directly with pharmaceutical companies. Rural healthcare access improvements include $50 billion in funding for rural hospital infrastructure, telemedicine expansion programs, and incentives for healthcare providers to practice in underserved areas. The legislation also establishes a public option for health insurance, allowing citizens to choose between private insurance and a government-run plan. Preventive care services are now fully covered without copays, including annual checkups, vaccinations, and cancer screenings. The bill includes provisions for addressing social determinants of health, with funding for housing assistance, nutrition programs, and transportation to medical appointments. Implementation will begin immediately, with full rollout expected within 18 months, potentially transforming the lives of millions of Americans who have struggled with healthcare access and affordability.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Supreme Court Rules on Landmark Case',
                'content' => 'The Supreme Court has issued a landmark ruling that will have far-reaching implications for constitutional law. The decision, reached by a narrow margin, addresses fundamental questions about individual rights and government authority that have been debated for decades.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Mayor Announces Urban Development Initiative',
                'content' => 'The city mayor has unveiled a comprehensive urban development initiative aimed at revitalizing downtown areas and improving infrastructure. The plan includes affordable housing projects, public transportation improvements, and green space development.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Diplomatic Relations Restored Between Nations',
                'content' => 'After years of tension, two neighboring countries have announced the restoration of full diplomatic relations. The breakthrough comes following months of secret negotiations and represents a significant step toward regional stability and economic cooperation.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Tax Reform Package Gains Momentum',
                'content' => 'A proposed tax reform package is gaining momentum in Congress, with supporters claiming it will simplify the tax code and stimulate economic growth. Critics argue the changes would disproportionately benefit wealthy individuals and corporations.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Voting Rights Legislation Advances',
                'content' => 'Legislation aimed at expanding voting rights and protecting election integrity has advanced through committee hearings. The bill addresses issues of voter access, election security, and campaign finance transparency.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a78e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Immigration Policy Changes Announced',
                'content' => 'The administration has announced significant changes to immigration policy, including streamlined visa processes and enhanced border security measures. The reforms aim to balance national security concerns with humanitarian considerations.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Education Funding Bill Signed Into Law',
                'content' => 'A major education funding bill has been signed into law, providing billions in additional resources for public schools, teacher training programs, and student support services. The legislation represents the largest education investment in decades.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1523240798036-6e04e4bf9b47?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Environmental Protection Agency Announces New Regulations',
                'content' => 'The Environmental Protection Agency has announced new regulations aimed at reducing industrial pollution and protecting water resources. The rules are expected to significantly impact manufacturing and energy sectors.',
                'category' => 'Politics',
                'image' => 'https://images.unsplash.com/photo-1569163139394-de6e4d1b4b0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],

            // Sport Posts
            [
                'title' => 'Olympic Games 2024: Record-Breaking Performances',
                'content' => 'The 2024 Olympic Games have concluded with several record-breaking performances across multiple sports. Athletes from around the world showcased incredible talent and determination, with new world records set in swimming, track and field, and gymnastics. The games were a testament to human achievement and international cooperation.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1461896836934-ffe0ba2b2b8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'World Cup Final: Unforgettable Match Ends in Penalties',
                'content' => 'The World Cup final delivered one of the most thrilling matches in football history, ending in a dramatic penalty shootout. Both teams displayed exceptional skill and determination throughout the 120 minutes of play. The victory was celebrated by millions of fans worldwide, marking the end of an incredible tournament.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Marathon Runner Sets New World Record',
                'content' => 'An elite marathon runner has set a new world record, completing the 26.2-mile distance in an astonishing time. The achievement required months of intensive training, careful nutrition planning, and perfect race day conditions. The new record has inspired runners worldwide and pushed the boundaries of human endurance.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Championship Series Goes to Game 7',
                'content' => 'The championship series has reached a decisive Game 7 after an incredible comeback in Game 6. Both teams have shown remarkable resilience throughout the series, with momentum shifting dramatically between games. Fans are eagerly anticipating what promises to be an unforgettable finale.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Tennis Star Wins Historic Grand Slam',
                'content' => 'A tennis superstar has achieved a historic Grand Slam victory, becoming only the third player in history to win all four major tournaments in a single year. The achievement required exceptional skill, mental toughness, and physical endurance across different playing surfaces.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Basketball Team Signs Superstar Player',
                'content' => 'A professional basketball team has signed a superstar player in a blockbuster trade that has sent shockwaves through the league. The acquisition is expected to significantly improve the team\'s championship prospects and generate excitement among fans.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Swimming Championship Breaks Attendance Records',
                'content' => 'The world swimming championships have broken attendance records, with fans from around the globe gathering to witness incredible performances in the pool. The event featured multiple world records and showcased the sport\'s growing international popularity.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1530549387789-4c1017266635?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Cycling Tour Features Epic Mountain Stages',
                'content' => 'The annual cycling tour has featured some of the most challenging mountain stages in its history, testing riders\' endurance and climbing abilities. The dramatic landscapes and grueling ascents have provided spectacular television coverage and thrilling competition.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Golf Tournament Ends in Dramatic Playoff',
                'content' => 'A major golf tournament ended in a dramatic playoff between three players, with the winner determined by a spectacular shot on the final hole. The competition showcased the mental toughness and precision required at the highest level of professional golf.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1535131749006-b7f58c99034b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Boxing Match Draws Global Attention',
                'content' => 'A highly anticipated boxing match has drawn global attention, with millions of viewers tuning in to watch two undefeated champions face off. The bout lived up to expectations, featuring intense action and dramatic moments throughout all rounds.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1549719386-74dfcbf7dbed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Soccer League Implements New Technology',
                'content' => 'A major soccer league has implemented new technology to improve officiating and enhance the fan experience. The innovations include video assistant referee systems, goal-line technology, and advanced player tracking systems.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Winter Sports Season Kicks Off',
                'content' => 'The winter sports season has officially kicked off with spectacular opening ceremonies and exciting competitions across multiple disciplines. Athletes are preparing for months of intense competition leading up to the world championships.',
                'category' => 'Sport',
                'image' => 'https://images.unsplash.com/photo-1551524164-6cf2ac5313c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],

            // Technology Posts
            [
                'title' => 'Revolutionary AI Technology Changes Everything',
                'content' => 'A groundbreaking artificial intelligence system has been developed that promises to revolutionize multiple industries. This new AI technology can process complex data at unprecedented speeds while maintaining accuracy levels never seen before. Tech companies are already racing to integrate this technology into their products and services.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Quantum Computing Breakthrough Achieved',
                'content' => 'Scientists have achieved a major breakthrough in quantum computing, successfully maintaining quantum coherence for extended periods. This advancement brings us closer to practical quantum computers that could solve complex problems impossible for classical computers. The research has implications for cryptography, drug discovery, and climate modeling.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => '5G Network Expansion Accelerates',
                'content' => 'The expansion of 5G networks is accelerating worldwide, bringing faster internet speeds and lower latency to millions of users. The technology promises to enable new applications in autonomous vehicles, smart cities, and remote healthcare.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Space Exploration Mission Reaches New Milestone',
                'content' => 'A space exploration mission has reached a new milestone, successfully landing a rover on a distant planet. The mission is collecting valuable data about the planet\'s composition and potential for supporting life, advancing our understanding of the universe.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1446776877081-d282a0f896e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Cybersecurity Threats Increase Globally',
                'content' => 'Cybersecurity experts are reporting a significant increase in sophisticated cyber attacks targeting governments, corporations, and individuals. The threats include ransomware, data breaches, and infrastructure attacks that highlight the need for enhanced security measures.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Electric Vehicle Sales Surge',
                'content' => 'Electric vehicle sales have surged to record levels as consumers embrace cleaner transportation options. Major automakers are investing heavily in electric vehicle technology, with new models offering improved range, faster charging, and advanced features.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1593941707882-a5bac6861d75?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Virtual Reality Technology Advances',
                'content' => 'Virtual reality technology has advanced significantly, offering more immersive experiences and practical applications. The technology is being used in education, healthcare, entertainment, and professional training with impressive results.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1592478411213-6153e4c4c8ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Blockchain Technology Gains Mainstream Adoption',
                'content' => 'Blockchain technology is gaining mainstream adoption across various industries, from finance to supply chain management. The technology\'s ability to provide secure, transparent, and decentralized solutions is driving its widespread implementation.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1639762681485-074b7f938ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Smart Home Devices Become More Intelligent',
                'content' => 'Smart home devices are becoming more intelligent and interconnected, offering homeowners unprecedented control and automation. The devices can learn user preferences, optimize energy usage, and provide enhanced security features.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Cloud Computing Services Expand',
                'content' => 'Cloud computing services are expanding rapidly, offering businesses and individuals powerful computing resources on demand. The services include data storage, processing power, and software applications accessible from anywhere in the world.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Robotics Industry Sees Major Growth',
                'content' => 'The robotics industry is experiencing major growth as robots become more capable and affordable. Applications range from manufacturing and healthcare to household assistance and entertainment, transforming how we work and live.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Mobile App Development Reaches New Heights',
                'content' => 'Mobile app development has reached new heights with innovative features and user experiences. Developers are creating apps that leverage artificial intelligence, augmented reality, and advanced sensors to provide unprecedented functionality.',
                'category' => 'Technology',
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],

            // Entertainment Posts
            [
                'title' => 'Hollywood Blockbuster Breaks Box Office Records',
                'content' => 'The latest Hollywood blockbuster has shattered box office records worldwide, becoming the highest-grossing film of all time. The movie, featuring an all-star cast and cutting-edge special effects, has captivated audiences across all demographics. Critics are praising both the visual spectacle and the compelling storyline.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1489599808410-1b0b4b4b4b4b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Music Festival Draws Record Crowds',
                'content' => 'The annual music festival attracted record-breaking crowds this year, with over 100,000 attendees enjoying performances from top artists across multiple genres. The three-day event featured innovative stage designs, immersive experiences, and a diverse lineup that catered to all musical tastes. Organizers are already planning an even bigger event for next year.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Streaming Service Launches Original Series',
                'content' => 'A major streaming service has launched an original series that has quickly become a cultural phenomenon. The show features compelling characters, intricate plotlines, and high production values that rival traditional television networks.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1574375927938-d5a98e8ffe85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Broadway Musical Wins Multiple Awards',
                'content' => 'A new Broadway musical has won multiple awards, including recognition for its innovative staging, powerful performances, and memorable music. The production has been praised for addressing important social issues while providing entertaining theater.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Gaming Industry Reaches New Milestone',
                'content' => 'The gaming industry has reached a new milestone with record-breaking sales and player engagement. New games feature stunning graphics, immersive storytelling, and innovative gameplay mechanics that appeal to diverse audiences.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Comedy Special Becomes Viral Sensation',
                'content' => 'A stand-up comedy special has become a viral sensation, with millions of viewers sharing clips and quotes on social media. The comedian\'s sharp wit and timely observations about modern life have resonated with audiences worldwide.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Art Exhibition Breaks Attendance Records',
                'content' => 'A major art exhibition has broken attendance records, attracting visitors from around the world to view works by renowned artists. The exhibition features both classical masterpieces and contemporary installations that challenge traditional notions of art.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1541961017774-22349e4a1262?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Podcast Series Gains International Following',
                'content' => 'A podcast series has gained an international following, with millions of listeners tuning in to each episode. The show covers diverse topics with expert guests and engaging storytelling that educates and entertains audiences.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Dance Performance Wows Critics',
                'content' => 'A contemporary dance performance has wowed critics with its innovative choreography and emotional depth. The production combines traditional and modern dance techniques to tell a powerful story that resonates with audiences.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Reality TV Show Captures Global Attention',
                'content' => 'A reality TV show has captured global attention with its unique format and compelling contestants. The program has sparked conversations about social issues while providing entertaining content that keeps viewers engaged.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1574375927938-d5a98e8ffe85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Book Series Adaptation Premieres',
                'content' => 'The highly anticipated adaptation of a popular book series has premiered to critical acclaim. The television series faithfully captures the essence of the source material while adding visual elements that enhance the storytelling.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1489599808410-1b0b4b4b4b4b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                'title' => 'Concert Tour Sells Out Worldwide',
                'content' => 'A major artist\'s concert tour has sold out venues worldwide, demonstrating the enduring appeal of live music. The performances feature elaborate stage designs, stunning visuals, and memorable musical moments that create lasting memories for fans.',
                'category' => 'Entertainment',
                'image' => 'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80'
            ]
        ];

        foreach ($posts as $postData) {
            $category = $categories->where('name', $postData['category'])->first();
            $user = $users->random();

            Post::create([
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'content' => $postData['content'],
                'image' => $postData['image'] ?? null,
                'category_id' => $category->id,
                'user_id' => $user->id,
                'created_at' => now()->subDays(rand(1, 30)),
            ]);
        }
    }
}
