<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // Question 1
            [
                'question' => 'What is the main greenhouse gas responsible for global warming?',
                'options' => [
                    'Carbon dioxide (CO2)',
                    'Methane (CH4)',
                    'Nitrous oxide (N2O)',
                    'Water vapor',
                ],
                'correct_option' => 1,
            ],
            // Question 2
            [
                'question' => 'What is the term used to describe the long-term change in Earth\'s climate patterns?',
                'options' => [
                    'Global warming',
                    'Climate change',
                    'Greenhouse effect',
                    'Ozone depletion',
                ],
                'correct_option' => 2,
            ],
            // Question 3
            [
                'question' => 'Which human activity is the largest source of greenhouse gas emissions?',
                'options' => [
                    'Transportation',
                    'Electricity generation',
                    'Deforestation',
                    'Agriculture',
                ],
                'correct_option' => 2,
            ],
            // Question 4
            [
                'question' => 'Which of the following is not a greenhouse gas?',
                'options' => [
                    'Oxygen (O2)',
                    'Carbon dioxide (CO2)',
                    'Methane (CH4)',
                    'Nitrous oxide (N2O)',
                ],
                'correct_option' => 1,
            ],
            // Question 5
            [
                'question' => 'What is the primary cause of the increase in atmospheric carbon dioxide concentrations?',
                'options' => [
                    'Burning fossil fuels',
                    'Deforestation',
                    'Volcanic activity',
                    'Industrial waste',
                ],
                'correct_option' => 1,
            ],
            // Question 6
            [
                'question' => 'Which of the following is a potential consequence of climate change?',
                'options' => [
                    'Rising sea levels',
                    'Increased frequency of hurricanes',
                    'Melting of polar ice caps',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 7
            [
                'question' => 'What is the Paris Agreement?',
                'options' => [
                    'A global treaty to combat climate change',
                    'An international organization for climate research',
                    'A renewable energy initiative',
                    'A plan to reduce greenhouse gas emissions by 50%',
                ],
                'correct_option' => 1,
            ],
            // Question 8
            [
                'question' => 'What is the main driver of deforestation?',
                'options' => [
                    'Agricultural expansion',
                    'Urbanization',
                    'Mining activities',
                    'Industrial pollution',
                ],
                'correct_option' => 1,
            ],
            // Question 9
            [
                'question' => 'What is the term used to describe the gradual increase in Earth\'s average temperature?',
                'options' => [
                    'Global warming',
                    'Climate change',
                    'Greenhouse effect',
                    'Ozone depletion',
                ],
                'correct_option' => 1,
            ],
            // Question 10
            [
                'question' => 'Which region is most vulnerable to the impacts of climate change?',
                'options' => [
                    'Arctic',
                    'Antarctica',
                    'Sahara Desert',
                    'Amazon Rainforest',
                ],
                'correct_option' => 1,
            ],
            // Question 11
            [
                'question' => 'What is the term used to describe the process of trapping heat in the atmosphere by certain gases?',
                'options' => [
                    'Greenhouse effect',
                    'Global warming',
                    'Climate change',
                    'Ozone depletion',
                ],
                'correct_option' => 1,
            ],
            // Question 12
            [
                'question' => 'What is the main source of methane emissions?',
                'options' => [
                    'Rice cultivation',
                    'Landfills',
                    'Livestock farming',
                    'Natural gas production',
                ],
                'correct_option' => 3,
            ],
            // Question 13
            [
                'question' => 'What is the relationship between climate change and extreme weather events?',
                'options' => [
                    'Climate change causes extreme weather events',
                    'Extreme weather events cause climate change',
                    'There is no relationship between the two',
                    'The relationship is not yet fully understood',
                ],
                'correct_option' => 4,
            ],
            // Question 14
            [
                'question' => 'What is the primary factor contributing to the loss of biodiversity?',
                'options' => [
                    'Habitat destruction',
                    'Climate change',
                    'Pollution',
                    'Invasive species',
                ],
                'correct_option' => 1,
            ],
            // Question 15
            [
                'question' => 'What is the goal of the United Nations Framework Convention on Climate Change (UNFCCC)?',
                'options' => [
                    'To stabilize greenhouse gas concentrations',
                    'To promote renewable energy',
                    'To reduce carbon emissions',
                    'To address climate change impacts',
                ],
                'correct_option' => 1,
            ],
            // Question 16
            [
                'question' => 'What is the main cause of sea level rise?',
                'options' => [
                    'Melting of glaciers',
                    'Expansion of seawater due to warming',
                    'Ice sheet collapse',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 17
            [
                'question' => 'What is the relationship between climate change and ocean acidification?',
                'options' => [
                    'Climate change causes ocean acidification',
                    'Ocean acidification causes climate change',
                    'There is no relationship between the two',
                    'The relationship is not yet fully understood',
                ],
                'correct_option' => 1,
            ],
            // Question 18
            [
                'question' => 'What is the main cause of deforestation in tropical rainforests?',
                'options' => [
                    'Expansion of agricultural land',
                    'Timber logging',
                    'Mining activities',
                    'Urbanization',
                ],
                'correct_option' => 1,
            ],
            // Question 19
            [
                'question' => 'What is the role of carbon sinks in mitigating climate change?',
                'options' => [
                    'They release greenhouse gases into the atmosphere',
                    'They absorb and store carbon dioxide',
                    'They contribute to ozone depletion',
                    'They cause ocean acidification',
                ],
                'correct_option' => 2,
            ],
            // Question 20
            [
                'question' => 'What is the impact of climate change on agriculture?',
                'options' => [
                    'Decreased crop yields',
                    'Increased pests and diseases',
                    'Altered precipitation patterns',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 21
            [
                'question' => 'What is the role of the Intergovernmental Panel on Climate Change (IPCC)?',
                'options' => [
                    'To provide scientific assessments of climate change',
                    'To develop policies for climate change mitigation',
                    'To implement renewable energy projects',
                    'To enforce international climate agreements',
                ],
                'correct_option' => 1,
            ],
            // Question 22
            [
                'question' => 'What is the main cause of the ozone hole?',
                'options' => [
                    'Greenhouse gas emissions',
                    'Deforestation',
                    'Industrial pollution',
                    'Emissions of ozone-depleting substances',
                ],
                'correct_option' => 4,
            ],
            // Question 23
            [
                'question' => 'What is the impact of climate change on human health?',
                'options' => [
                    'Increased risk of heat-related illnesses',
                    'Spread of vector-borne diseases',
                    'Poor air quality',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 24
            [
                'question' => 'What is the concept of carbon footprint?',
                'options' => [
                    'The amount of carbon dioxide emitted by an individual',
                    'The total carbon emissions of a country',
                    'The carbon emissions of a specific industry',
                    'The measurement of carbon stored in trees',
                ],
                'correct_option' => 1,
            ],
            // Question 25
            [
                'question' => 'What is the role of renewable energy in combating climate change?',
                'options' => [
                    'To reduce greenhouse gas emissions',
                    'To increase energy efficiency',
                    'To promote sustainable development',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 26
            [
                'question' => 'What is the main cause of coral bleaching?',
                'options' => [
                    'Ocean acidification',
                    'Rising ocean temperatures',
                    'Pollution',
                    'Overfishing',
                ],
                'correct_option' => 2,
            ],
            // Question 27
            [
                'question' => 'What is the impact of melting permafrost on climate change?',
                'options' => [
                    'Release of methane, a potent greenhouse gas',
                    'Sea level rise',
                    'Loss of biodiversity',
                    'Increased desertification',
                ],
                'correct_option' => 1,
            ],
            // Question 28
            [
                'question' => 'What is the concept of climate justice?',
                'options' => [
                    'Equitable distribution of climate impacts and mitigation efforts',
                    'The study of climate patterns and trends',
                    'The promotion of renewable energy',
                    'The prevention of climate-related disasters',
                ],
                'correct_option' => 1,
            ],
            // Question 29
            [
                'question' => 'What is the role of forests in climate change mitigation?',
                'options' => [
                    'They absorb and store carbon dioxide',
                    'They release greenhouse gases into the atmosphere',
                    'They promote renewable energy',
                    'They cause ozone depletion',
                ],
                'correct_option' => 1,
            ],
            // Question 30
            [
                'question' => 'What is the impact of climate change on freshwater resources?',
                'options' => [
                    'Decreased availability of water',
                    'Altered precipitation patterns',
                    'Increased risk of droughts and floods',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 31
            [
                'question' => 'What is the role of carbon pricing in climate change mitigation?',
                'options' => [
                    'To incentivize reduction of greenhouse gas emissions',
                    'To promote renewable energy investments',
                    'To enforce emission standards',
                    'To fund climate adaptation projects',
                ],
                'correct_option' => 1,
            ],
            // Question 32
            [
                'question' => 'What is the impact of climate change on wildlife?',
                'options' => [
                    'Loss of habitat',
                    'Disruption of migratory patterns',
                    'Changes in species behavior',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 33
            [
                'question' => 'What is the role of technology in climate change mitigation?',
                'options' => [
                    'To develop renewable energy sources',
                    'To improve energy efficiency',
                    'To monitor and analyze climate data',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 34
            [
                'question' => 'What is the concept of adaptation to climate change?',
                'options' => [
                    'Adjusting to the impacts of climate change',
                    'Preventing climate change through policy measures',
                    'Promoting renewable energy sources',
                    'Reducing greenhouse gas emissions',
                ],
                'correct_option' => 1,
            ],
            // Question 35
            [
                'question' => 'What is the impact of climate change on coastal areas?',
                'options' => [
                    'Increased risk of erosion',
                    'Rising sea levels',
                    'Damage to infrastructure',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 36
            [
                'question' => 'What is the role of the Green Climate Fund?',
                'options' => [
                    'To provide financial support for climate adaptation and mitigation projects in developing countries',
                    'To enforce international climate agreements',
                    'To research and develop renewable energy technologies',
                    'To monitor greenhouse gas emissions',
                ],
                'correct_option' => 1,
            ],
            // Question 37
            [
                'question' => 'What is the impact of climate change on indigenous communities?',
                'options' => [
                    'Loss of traditional livelihoods',
                    'Displacement',
                    'Loss of cultural heritage',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 38
            [
                'question' => 'What is the concept of carbon neutrality?',
                'options' => [
                    'Offsetting carbon emissions through conservation projects',
                    'Eliminating all carbon emissions',
                    'Reducing carbon emissions to zero',
                    'Using carbon capture technology',
                ],
                'correct_option' => 3,
            ],
            // Question 39
            [
                'question' => 'What is the impact of climate change on the Arctic region?',
                'options' => [
                    'Melting of sea ice',
                    'Loss of habitat for polar bears',
                    'Disruption of ecosystems',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 40
            [
                'question' => 'What is the role of education in addressing climate change?',
                'options' => [
                    'To raise awareness about the impacts of climate change',
                    'To promote sustainable behaviors',
                    'To empower individuals to take action',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 41
            [
                'question' => 'What is the impact of climate change on the economy?',
                'options' => [
                    'Increased costs of natural disasters',
                    'Loss of agricultural productivity',
                    'Disruption of supply chains',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 42
            [
                'question' => 'What is the role of international cooperation in addressing climate change?',
                'options' => [
                    'To establish emission reduction targets',
                    'To share knowledge and technology',
                    'To provide financial support for developing countries',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 43
            [
                'question' => 'What is the impact of climate change on the Arctic region?',
                'options' => [
                    'Melting of sea ice',
                    'Loss of habitat for polar bears',
                    'Disruption of ecosystems',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 44
            [
                'question' => 'What is the role of education in addressing climate change?',
                'options' => [
                    'To raise awareness about the impacts of climate change',
                    'To promote sustainable behaviors',
                    'To empower individuals to take action',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 45
            [
                'question' => 'What is the impact of climate change on the economy?',
                'options' => [
                    'Increased costs of natural disasters',
                    'Loss of agricultural productivity',
                    'Disruption of supply chains',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 46
            [
                'question' => 'What is the role of international cooperation in addressing climate change?',
                'options' => [
                    'To establish emission reduction targets',
                    'To share knowledge and technology',
                    'To provide financial support for developing countries',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 47
            [
                'question' => 'What is the impact of climate change on the polar regions?',
                'options' => [
                    'Accelerated melting of ice',
                    'Loss of habitat for polar animals',
                    'Disruption of ecosystems',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 48
            [
                'question' => 'What is the role of businesses in addressing climate change?',
                'options' => [
                    'To reduce greenhouse gas emissions',
                    'To invest in renewable energy',
                    'To adopt sustainable practices',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 49
            [
                'question' => 'What is the impact of climate change on the water cycle?',
                'options' => [
                    'Intensification of rainfall',
                    'Droughts in certain regions',
                    'Changes in river flow',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 50
            [
                'question' => 'What is the role of individuals in addressing climate change?',
                'options' => [
                    'To reduce personal carbon footprint',
                    'To advocate for policy changes',
                    'To support sustainable businesses',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 51
            [
                'question' => 'What is the impact of climate change on the Amazon rainforest?',
                'options' => [
                    'Increased risk of wildfires',
                    'Loss of biodiversity',
                    'Changes in precipitation patterns',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 52
            [
                'question' => 'What is the role of agriculture in climate change?',
                'options' => [
                    'Agriculture is a significant source of greenhouse gas emissions',
                    'Agriculture can contribute to carbon sequestration',
                    'Climate change can impact agricultural productivity',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 53
            [
                'question' => 'What is the impact of climate change on the Great Barrier Reef?',
                'options' => [
                    'Coral bleaching',
                    'Loss of marine biodiversity',
                    'Ocean acidification',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 54
            [
                'question' => 'What is the role of cities in addressing climate change?',
                'options' => [
                    'To implement sustainable urban planning',
                    'To promote public transportation',
                    'To reduce energy consumption in buildings',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 55
            [
                'question' => 'What is the impact of climate change on the Sahel region in Africa?',
                'options' => [
                    'Increased risk of droughts',
                    'Loss of agricultural productivity',
                    'Displacement of populations',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 56
            [
                'question' => 'What is the role of the Paris Agreement in addressing climate change?',
                'options' => [
                    'To limit global temperature rise to well below 2 degrees Celsius',
                    'To enhance countries\' adaptive capacity and resilience',
                    'To provide financial support for developing countries',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 57
            [
                'question' => 'What is the impact of climate change on the Antarctic region?',
                'options' => [
                    'Melting of ice shelves',
                    'Disruption of marine ecosystems',
                    'Rising sea levels',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 58
            [
                'question' => 'What is the role of research and development in addressing climate change?',
                'options' => [
                    'To develop innovative solutions for mitigation and adaptation',
                    'To improve understanding of climate change impacts',
                    'To inform policy-making',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 59
            [
                'question' => 'What is the impact of climate change on the Mekong Delta in Southeast Asia?',
                'options' => [
                    'Sea level rise',
                    'Saltwater intrusion',
                    'Loss of agricultural land',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],
            // Question 60
            [
                'question' => 'What is the role of youth in addressing climate change?',
                'options' => [
                    'To advocate for climate action',
                    'To engage in climate activism',
                    'To participate in climate conferences',
                    'All of the above',
                ],
                'correct_option' => 4,
            ],

            // Question 61
[
    'question' => 'What is the impact of climate change on the Pacific Islands?',
    'options' => [
        'Sea level rise',
        'Increased frequency of tropical cyclones',
        'Ocean acidification',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 62
[
    'question' => 'What is the role of forests in climate change mitigation?',
    'options' => [
        'Forests act as carbon sinks',
        'Forests help regulate the water cycle',
        'Forests provide habitat for biodiversity',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 63
[
    'question' => 'What is the impact of climate change on human health?',
    'options' => [
        'Increased risk of heat-related illnesses',
        'Spread of vector-borne diseases',
        'Poor air quality',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 64
[
    'question' => 'What is the role of the transportation sector in climate change?',
    'options' => [
        'Transportation is a significant source of greenhouse gas emissions',
        'Promoting sustainable transportation options',
        'Investing in electric vehicles',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 65
[
    'question' => 'What is the impact of climate change on the Himalayan region?',
    'options' => [
        'Retreating glaciers',
        'Changes in water availability',
        'Increased risk of landslides',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 66
[
    'question' => 'What is the role of the United Nations Framework Convention on Climate Change (UNFCCC) in addressing climate change?',
    'options' => [
        'To facilitate international climate negotiations',
        'To coordinate climate action among countries',
        'To support developing countries in climate adaptation and mitigation',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 67
[
    'question' => 'What is the impact of climate change on the Mediterranean region?',
    'options' => [
        'Increased risk of wildfires',
        'Water scarcity',
        'Loss of biodiversity',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 68
[
    'question' => 'What is the role of renewable energy in addressing climate change?',
    'options' => [
        'Reducing greenhouse gas emissions from the energy sector',
        'Promoting energy independence',
        'Creating job opportunities',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 69
[
    'question' => 'What is the impact of climate change on small island developing states?',
    'options' => [
        'Sea level rise',
        'Loss of coastal ecosystems',
        'Threat to freshwater resources',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 70
[
    'question' => 'What is the role of international climate finance in supporting developing countries?',
    'options' => [
        'To provide financial resources for climate adaptation and mitigation projects',
        'To facilitate technology transfer',
        'To enhance capacity building efforts',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 71
[
    'question' => 'What is the impact of climate change on

 the Caribbean region?',
    'options' => [
        'Increased frequency of hurricanes',
        'Coral bleaching',
        'Economic impacts on tourism and agriculture',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 72
[
    'question' => 'What is the role of the private sector in addressing climate change?',
    'options' => [
        'To invest in renewable energy projects',
        'To develop sustainable business practices',
        'To collaborate with governments and NGOs',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 73
[
    'question' => 'What is the impact of climate change on the Indian subcontinent?',
    'options' => [
        'Changes in monsoon patterns',
        'Water scarcity',
        'Loss of agricultural productivity',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 74
[
    'question' => 'What is the role of the Intergovernmental Panel on Climate Change (IPCC) in addressing climate change?',
    'options' => [
        'To assess the scientific basis of climate change',
        'To provide policymakers with guidance on climate-related issues',
        'To inform international climate negotiations',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 75
[
    'question' => 'What is the impact of climate change on coastal areas?',
    'options' => [
        'Erosion of coastlines',
        'Increased risk of flooding',
        'Saltwater intrusion into freshwater sources',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 76
[
    'question' => 'What is the role of indigenous peoples in addressing climate change?',
    'options' => [
        'To share traditional knowledge and practices',
        'To advocate for their rights and land management',
        'To contribute to climate adaptation and mitigation strategies',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 77
[
    'question' => 'What is the impact of climate change on the African continent?',
    'options' => [
        'Increased risk of droughts',
        'Food insecurity',
        'Displacement of populations',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 78
[
    'question' => 'What is the role of the Green Climate Fund in supporting climate action?',
    'options' => [
        'To provide financial resources for climate projects in developing countries',
        'To help developing countries transition to low-carbon economies',
        'To enhance capacity building efforts',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 79
[
    'question' => 'What is the impact of climate change on the Asian monsoon system?',
    'options' => [
        'Changes in rainfall patterns',
        'Flooding in coastal areas',
        'Impacts on agriculture',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 80
[
    'question' => 'What is the role of carbon pricing in addressing climate change?',
    'options' => [
        'To create economic incentives for reducing greenhouse gas emissions',
        'To support investments in low-carbon technologies',
        'To promote energy efficiency',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 81
[
    'question' => 'What is the impact of climate change

 on the Arctic region?',
    'options' => [
        'Melting of sea ice',
        'Loss of biodiversity',
        'Thawing permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 82
[
    'question' => 'What is the role of education in addressing climate change?',
    'options' => [
        'To raise awareness about climate change',
        'To empower individuals to take climate action',
        'To foster a culture of sustainability',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 83
[
    'question' => 'What is the impact of climate change on the Amazon rainforest?',
    'options' => [
        'Increased risk of wildfires',
        'Loss of biodiversity',
        'Changes in rainfall patterns',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 84
[
    'question' => 'What is the role of international cooperation in addressing climate change?',
    'options' => [
        'To share knowledge and best practices',
        'To provide financial and technological support',
        'To facilitate the transfer of clean technologies',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 85
[
    'question' => 'What is the impact of climate change on the boreal forest?',
    'options' => [
        'Increased risk of wildfires',
        'Changes in ecosystem dynamics',
        'Release of carbon stored in permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 86
[
    'question' => 'What is the role of the World Bank in addressing climate change?',
    'options' => [
        'To provide financial support for climate projects in developing countries',
        'To promote climate-smart policies and investments',
        'To assist countries in accessing climate finance',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 87
[
    'question' => 'What is the impact of climate change on the boreal forest?',
    'options' => [
        'Increased risk of wildfires',
        'Changes in ecosystem dynamics',
        'Release of carbon stored in permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 88
[
    'question' => 'What is the role of the World Bank in addressing climate change?',
    'options' => [
        'To provide financial support for climate projects in developing countries',
        'To promote climate-smart policies and investments',
        'To assist countries in accessing climate finance',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 89
[
    'question' => 'What is the impact of climate change on the boreal forest?',
    'options' => [
        'Increased risk of wildfires',
        'Changes in ecosystem dynamics',
        'Release of carbon stored in permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 90
[
    'question' => 'What is the role of the World Bank in addressing climate change?',
    'options' => [
        'To provide financial support for climate projects in developing countries',
        'To promote climate-smart policies and investments',
        'To assist countries in accessing climate finance',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 91
[
    'question' => 'What is the

 impact of climate change on the boreal forest?',
    'options' => [
        'Increased risk of wildfires',
        'Changes in ecosystem dynamics',
        'Release of carbon stored in permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 92
[
    'question' => 'What is the role of the World Bank in addressing climate change?',
    'options' => [
        'To provide financial support for climate projects in developing countries',
        'To promote climate-smart policies and investments',
        'To assist countries in accessing climate finance',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 93
[
    'question' => 'What is the impact of climate change on the boreal forest?',
    'options' => [
        'Increased risk of wildfires',
        'Changes in ecosystem dynamics',
        'Release of carbon stored in permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 94
[
    'question' => 'What is the role of the World Bank in addressing climate change?',
    'options' => [
        'To provide financial support for climate projects in developing countries',
        'To promote climate-smart policies and investments',
        'To assist countries in accessing climate finance',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 95
[
    'question' => 'What is the impact of climate change on the boreal forest?',
    'options' => [
        'Increased risk of wildfires',
        'Changes in ecosystem dynamics',
        'Release of carbon stored in permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 96
[
    'question' => 'What is the role of the World Bank in addressing climate change?',
    'options' => [
        'To provide financial support for climate projects in developing countries',
        'To promote climate-smart policies and investments',
        'To assist countries in accessing climate finance',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 97
[
    'question' => 'What is the impact of climate change on the boreal forest?',
    'options' => [
        'Increased risk of wildfires',
        'Changes in ecosystem dynamics',
        'Release of carbon stored in permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 98
[
    'question' => 'What is the role of the World Bank in addressing climate change?',
    'options' => [
        'To provide financial support for climate projects in developing countries',
        'To promote climate-smart policies and investments',
        'To assist countries in accessing climate finance',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 99
[
    'question' => 'What is the impact of climate change on the boreal forest?',
    'options' => [
        'Increased risk of wildfires',
        'Changes in ecosystem dynamics',
        'Release of carbon stored in permafrost',
        'All of the above',
    ],
    'correct_option' => 4,
],
// Question 100
[
    'question' => 'What is the role of the World Bank in addressing climate change?',
    'options' => [
        'To provide financial support for climate projects in developing countries',
        'To promote climate-smart policies and investments',
        'To assist countries in accessing climate finance',
        'All of the above',


    ],
    'correct_option' => 4,
],
        ];
        
        
        
        foreach ($questions as $questionData) {
            $question = new Question();
            $question->question = $questionData['question'];
            $question->option1 = $questionData['options'][0];
            $question->option2 = $questionData['options'][1];
            $question->option3 = $questionData['options'][2];
            $question->option4 = $questionData['options'][3];
            $question->correct_option = $questionData['correct_option'];
            $question->save();
        }
        
        
    }
}
