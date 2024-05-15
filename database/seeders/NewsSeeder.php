<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'category_id' => 1,
                // 'user_id' => '',
                'title' => 'Metaverse in 2024',
                'cover' => 'https://img.freepik.com/free-vector/retro-futuristic-landscape-universe-background_52683-18057.jpg?w=1380&t=st=1715607800~exp=1715608400~hmac=28257a9e0ac9926913e91372c7d85fa40a1195383895d72a49d66aec426c68b3',
                'body' => "The evolution of the metaverse stands at the intersection of technology and human imagination. Projections for 2024 indicate a potential leap forward, albeit rooted in ongoing advancements in AI, but also in developing high-quality chips that will give much-needed computing power. Our bet is still on the long-term success of metaverse. After the initial hype, practical applications will mark the years to come.

                The metaverse, fundamentally reliant on the technologies underpinning it, could undergo changes fueled by the convergence of AI. Forecasts envision this synergy transforming the very essence of creation within virtual realms. Creators are anticipated to harness AI; Just imagine using the ChatGPT style prompts to create entire virtual worlds.

                Artificial Intelligence’s assimilation into the metaverse promises an enriched user experience poised to propel greater engagement within virtual spaces. The seamless integration of AI into the metaverse is projected to elevate user interactions, potentially leading to prolonged immersion in these digital domains.

                Recent developments in 2023 by tech giants like Apple and Meta, with the unveiling of VisionPro headsets and Ray-Ban smart glasses respectively, offer glimpses into the technological landscape set to unfold in 2024. These unveilings, though significant, represent gradual progress in the broader spectrum of metaverse development.

                An interesting landmark lies in Elon Musk’s Neuralink, which received FDA approval for its human clinical trial scheduled for 2024. Although its full potential remains a long-term prospect, Neuralink’s brain implant technology has the potential to significantly influence the metaverse’s evolution.",
                'source' => 'https://dig.watch/technologies/metaverse',
                'author' => 'admin'
            ],

            [
                "category_id" => 5,
                "title" => "What’s new for apps distributed in the European Union",
                "body" => "The CTF is an element of the alternative business terms in the EU that reflects the value Apple provides developers through tools, technologies, and services that enable them to build and share innovative apps. We believe anyone with a good idea and the ingenuity to bring it to life should have the opportunity to offer their app to the world. Only developers who reach significant scale (more than one million first annual installs per year in the EU) pay the CTF. Nonprofit organizations, government entities, and educational institutions approved for a fee waiver don’t pay the CTF. Today, we’re introducing two additional conditions in which the CTF is not required:
                    First, no CTF is required if a developer has no revenue whatsoever. This includes creating a free app without monetization that is not related to revenue of any kind (physical, digital, advertising, or otherwise). This condition is intended to give students, hobbyists, and other non-commercial developers an opportunity to create a popular app without paying the CTF.
                    Second, small developers (less than €10 million in global annual business revenue*) that adopt the alternative business terms receive a 3-year free on-ramp to the CTF to help them create innovative apps and rapidly grow their business. Within this 3-year period, if a small developer that hasn’t previously exceeded one million first annual installs crosses the threshold for the first time, they won’t pay the CTF, even if they continue to exceed one million first annual installs during that time. If a small developer grows to earn global revenue between €10 million and €50 million within the 3-year on-ramp period, they’ll start to pay the CTF after one million first annual installs up to a cap of €1 million per year.",
                "cover" => "",
                "source" => "https://developer.apple.com/news/?id=d0z8d8rx",
                "author" => "app inc"
            ],

            [
                "category_id" => 3,
                "title" => "OpenAI set to unveil AI-driven challenger to Google Search",
                "cover" => "https://www.artificialintelligence-news.com/wp-content/uploads/sites/9/2024/05/openai-google-search-ai-artificial-intelligence-1536x1024.jpg",
                "body" => "Google’s long-standing supremacy in the search engine arena may soon be challenged as OpenAI, boosted by its partnership with Microsoft, is reportedly stepping up to launch its own AI-driven search product.
                According to two sources familiar with the matter who spoke to Reuters, OpenAI is scheduled to unveil its AI-powered search tool on Monday. The introduction of this product coincides closely with the timing of Google’s annual I/O conference, which starts on Tuesday and is anticipated to feature several AI-related announcements.
                While Google remains a titan in search, it too has been adapting to incorporate AI more deeply into its functionalities. Google began trialling AI-powered search summaries in the US over a year ago and expanded testing to selected, signed-in UK users last month.
                The potential entry of OpenAI into the search engine market adds a new layer of competition not only for Google, but also for other entities like Perplexity. This week, Perplexity announced a partnership with SoundHound to enhance voice assistants for IoT devices with its AI-powered search capabilities.
                OpenAI, heavily supported by Microsoft, seems to be banking on the intersection of AI and search engine technology to carve out its niche. Microsoft previously integrated OpenAI’s AI capabilities into its Bing search engine and Edge browser in February 2023, making these advanced features available to paid subscribers, along with integration into its Microsoft Office suite.
                OpenAI’s forthcoming search product is expected to expand on its existing flagship tool, ChatGPT. Reports from Bloomberg reveal that the new feature will allow users to pose questions to ChatGPT and receive responses that pull information from the web with appropriate citations. This could include references to Wikipedia or various blogs and might even provide illustrative images or diagrams relevant to the queries.

                If OpenAI successfully launches this new search product, it could signify a significant shift in how internet searches are conducted—moving away from traditional search models towards more integrated, AI-driven responses that significantly enhance user experience.",
                "source" => "https://www.artificialintelligence-news.com/2024/05/10/openai-set-unveil-ai-driven-challenger-google-search/",
                "author" => "Ryan Daws"
            ],

            [
                'category_id' => 3,
                "title" => "Accelerating ML application development: Production-ready Airflow integrations with critical AI tools",
                "cover" => "https://www.artificialintelligence-news.com/wp-content/uploads/sites/9/2024/05/Accelerating-ML-Application-Development_-Production-Ready-Airflow-Integrations-with-Critical-AI-Tools.png",
                'body' => "Generative AI and operational machine learning play crucial roles in the modern data landscape by enabling organizations to leverage their data to power new products and increase customer satisfaction. These technologies are used for virtual assistants, recommendation systems, content generation, and more. They help organizations build a competitive advantage through data-driven decision making, automation, enhanced business processes, and customer experiences.

                Apache Airflow is at the core of many teams’ ML operations, and with new integrations for Large Language Models (LLMs), Airflow enables these teams to build production-quality applications with the latest advancements in ML and AI.
                
                Simplifying ML Development
                All too frequently, machine learning models and predictive analytics are created in silos, far removed from production systems and applications. Organizations face a perpetual challenge to turn a lone data scientist’s notebook into a production-ready application with stability, scaling, compliance, etc.
                
                Organizations that standardize on one platform for orchestrating both their DataOps and MLOps workflows, however, are able to reduce not only the friction of end-to-end development but also infrastructure costs and IT sprawl. While it may seem counterintuitive, these teams also benefit from more choice. When the centralized orchestration platform, like Apache Airflow, is open-source and includes integrations to nearly every data tool and platform, data and ML teams can pick the tools that work best for their needs while enjoying the benefits of standardization, governance, simplified troubleshooting, and reusability.
                
                Apache Airflow and Astro (Astronomer’s fully managed Airflow orchestration platform) is the place where data engineers and ML engineers meet to create business value from operational ML. With a massive number of data engineering pipelines running on Airflow every day across every industry and sector, it is the workhorse of modern data operations, and ML teams can piggyback off of this foundation for not only model inference but also training, evaluation, and monitoring.",
                'source' => "https://www.artificialintelligence-news.com/2024/05/08/accelerating-ml-application-development-production-ready-airflow-integrations-with-critical-ai-tools/",
                'author' => "Steven Hillion"
            ],

            [
                'category_id' => 7,
                'title' => 'Multisampled Anti-aliasing For Almost Free — On Tile-Based Rendering Hardware',
                'cover' => 'https://miro.medium.com/v2/resize:fit:640/format:webp/0*4MmNtvKYOohUbpTt',
                'body' => "Anti-aliasing (AA) is an important technique to improve the quality of rendered graphics. Numerous algorithms have been developed over the years:

                Some rely on post-processing aliased images (such as FXAA): These techniques are fast, but produce low quality images
                Some rely on shading multiple samples per pixel (SSAA): These techniques are expensive due to the high number of fragment shader invocations
                More recent techniques (such as TAA) spread the cost of SSAA over multiple frames, reducing the cost to single-sampled rendering at the cost of code complexity
                Example of anti-aliasing. Left: Aliased, Right: Anti-Aliased
                Anti-aliasing in Action. Left: Aliased scene. Right: Anti-aliased scene.
                While TAA and the likes are gaining popularity, MSAA has for a long time been the compromise between performance and complexity. In this method, fragment shaders are run once per pixel, but coverage tests, depth tests, etc are performed per sample. This method can still be expensive due to the higher amount of memory and bandwidth consumed by the multisampled images on Immediate-Mode Rendering (IMR) architectures.
                
                However, GPUs with a Tile-Based Rendering (TBR) architecture do so well with MSAA, it can be nearly free if done right. This article describes how that can be achieved. Analysis of top OpenGL ES games on Android shows MSAA is rarely used, and when it is, its usage is suboptimal. Visuals in Android games can be dramatically improved by following the advice in this blog post, and practically for free!
                
                The first section below demonstrates how to do this on the hardware level. The sections that follow point out the necessary API pieces in Vulkan and OpenGL ES to achieve this.",
                'source' => 'https://medium.com/androiddevelopers/multisampled-anti-aliasing-for-almost-free-on-tile-based-rendering-hardware-21794c479cb9',
                'author' => 'Shahbaz Youssefi'
            ],

            [
                'category_id' => 6,
                'title' => 'Web publishers brace for carnage as Google adds AI answers',
                'cover' => 'https://www.washingtonpost.com/wp-apps/imrs.php?src=https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/JMLNSD4Y2RGC5ENYDMOLTMHZ7Y.jpg&w=916',
                'body' => "Kimber Matherne’s thriving food blog draws millions of visitors each month searching for last-minute dinner ideas.

                But the mother of three says decisions made at Google, more than 2,000 miles from her home in the Florida panhandle, are threatening her business. About 40 percent of visits to her blog, Easy Family Recipes, come through the search engine, which has for more than two decades served as the clearinghouse of the internet, sending users to hundreds of millions of websites each day.
                
                As the tech giant gears up for Google I/O, its annual developer conference, this week, creators like Matherne are worried about the expanding reach of its new search tool that incorporates artificial intelligence. The product, dubbed “Search Generative Experience,” or SGE, directly answers queries with complex, multi-paragraph replies that push links to other websites further down the page, where they’re less likely to be seen.
                
                The shift stands to shake the very foundations of the web.",
                'source' => 'https://www.washingtonpost.com/technology/2024/05/13/google-ai-search-io-sge/',
                'author' => 'Gerrit De Vynck'
            ],
            [
                'category_id' => 4,
                'title' => 'Linux Kernel 6.9 Officially Released, This Is What’s New',
                'cover' => 'https://i0.wp.com/9to5linux.com/wp-content/uploads/2024/05/lk69.webp?resize=1400%2C800&ssl=1',
                'body' => "Marius Nestorby Marius NestorMay 12, 20240 Comments
                Share this article:
                Linux Kernel 6.9
                Linus Torvalds announced today the release and general availability of Linux kernel 6.9, the latest stable version of the Linux kernel that introduces several new features and improved hardware support.
                
                Highlights of Linux kernel 6.9 include Rust support on AArch64 (ARM64) architectures, support for the Intel FRED (Flexible Return and Event Delivery) mechanism for improved low-level event delivery, support for AMD SNP (Secure Nested Paging) guests, and a new dm-vdo (virtual data optimizer) target in device mapper for inline deduplication, compression, zero-block elimination, and thin provisioning.
                
                Linux kernel 6.9 also supports the Named Address Spaces feature in GCC (GNU Compiler Collection) that allows the compiler to better optimize per-CPU data access, adds initial support for FUSE passthrough to allow the kernel to serve files from a user-space FUSE server directly, adds support for the Energy Model to be updated dynamically at run time, and introduces a new LPA2 mode for ARM 64-bit processors.
                
                Rust language has been updated to version 1.76.0 in Linux 6.9, which also reworks the locking mechanism in the GPIO subsystem, adds support for the ORC stack unwinder and kernel live patching for the LoongArch architecture, mitigates the RFDS (Register File Data Sampling) vulnerability affecting Intel Atom processors, and adds support for the membarrier() system call for the RISC-V architecture.",
                'source' => 'https://9to5linux.com/linux-kernel-6-9-officially-released-this-is-whats-new',
                'author' => 'Marius Nestor',
            ]
        ]);
    }
}
