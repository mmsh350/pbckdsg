@extends('layouts.frontend')

@section('title', 'Eiu | Planning & Budget Commission')

@section('content')
<!-- Page Hero -->
        <section class="page-hero"
            style="background-image: linear-gradient(to right, rgba(4, 31, 86, 0.98), rgba(4, 31, 86, 0.6)), url('assets/images/backgrounds/GLSlf9uWAAAbC-D.jpeg'); background-size: cover; background-position: center; padding: 10rem 0 8rem; color: white;">
            <div class="container">
                <div class="breadcrumbs"
                    style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.75rem; font-weight: 700; margin-bottom: 2rem; color: white; text-transform: uppercase; letter-spacing: 0.05em;">
                    <a href="index.html" style="color: white; text-decoration: none;">HOME</a>
                    <svg viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="4" width="14" height="14"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                    <a href="#" style="color: white; text-decoration: none;">GOVERNANCE</a>
                    <svg viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="4" width="14" height="14"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                    <span style="color: white;">UNITS</span>
                </div>
                <h1
                    style="font-size: 2.5rem; font-weight: 800; color: white; margin: 0; line-height: 1.15; letter-spacing: -0.02em;">
                    Economic Intelligence Unit</h1>
            </div>
        </section>

        <!-- About Department -->
        <section class="section about-bureau" style="padding: 6rem 0;">
            <div class="container">
                <div class="about-bureau-grid"
                    style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div class="about-bureau-content">
                        <h2
                            style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin-bottom: 1.5rem; letter-spacing: -0.02em;">
                            About the Unit</h2>
                        <p style="margin-bottom: 2rem; color: var(--gray-600); line-height: 1.7; font-size: 0.95rem;">
                            The Economic Intelligence Unit serves as a specialized analytical arm within the Kaduna State Planning and Budget Commission, providing critical data-driven insights and economic analysis to support evidence-based decision-making. The unit collects, analyzes, and interprets economic data and trends, produces economic forecasts, conducts research on key economic indicators, and provides strategic intelligence on both state and national economic developments. Through its comprehensive research and analysis, the unit helps inform policy formulation, investment decisions, and economic planning while offering valuable recommendations to enhance the state's economic performance and competitiveness in line with its development objectives.
                        </p>
                    </div>
                    <div class="about-bureau-image">
                        <img src="{{ asset('assets/images/backgrounds/blur-1853262_1280-768x576.jpg') }}"
                            alt="Stock Chart Monitor" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Functions Section -->
        <section class="section kdbs-strategic" style="background-color: #041f56; color: white; padding: 5rem 0;">
            <div class="container">
                <div class="strategic-grid" style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem;">
                    <!-- Left Column -->
                    <div class="strategic-left">
                        <h2 style="font-size: 1.5rem; font-weight: 700; line-height: 1.4; margin-bottom: 1.5rem; color: white; letter-spacing: -0.01em;">
                            The Economic Intelligence Unit is a research oriented endeavour with the following core functions:
                        </h2>
                        <img src="{{ asset('assets/images/backgrounds/business-8174708_640.jpg') }}" alt="Boardroom"
                            style="width: 100%; display: block; margin-bottom: 1.5rem;">
                        <hr style="width: 60px; border: 1px solid #FF6B00; margin: 0; padding: 0;">
                    </div>
                    
                    <!-- Right Column -->
                    <div class="strategic-right">
                        <!-- Functions List -->
                        
                        <!-- Function 1 -->
                        <div class="strategic-block" style="margin-bottom: 2.5rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Monitoring</h4>
                            </div>
                            <p style="margin: 0 0 0 2.2rem; font-size: 0.85rem; line-height: 1.6; color: rgba(255,255,255,0.9);">
                                This focuses on the underlying real factors impacting both revenue and expenditure. It includes looking at the macroeconomic and mineral sector performance nationally and the macroeconomic performance of the state, and forging linkages with the relevant revenue and expenditure items to provide both a historical and forward looking commentary on performance. This would support both in-year and out-year decision making.
                            </p>
                        </div>
                        
                        <!-- Function 2 -->
                        <div class="strategic-block" style="margin-bottom: 2.5rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Review of Emerging Economic Trends</h4>
                            </div>
                            <p style="margin: 0 0 0 2.2rem; font-size: 0.85rem; line-height: 1.6; color: rgba(255,255,255,0.9);">
                                Identifying emerging economic and development issues that will be of interest and benefit to the state, from variety of sources including Kaduna State, Federal Government (such as NBS, CBN, NPC and other Federal MDAs), other states, development agencies and the private sector; and advising the Commissioner for Planning and Budget and the State accordingly. This function also involves monitoring the dynamics in the private sector and broader economy of Kaduna State, including identifying technical innovations that might benefit the state, use leading indicators to forecast the future dynamics and advice on policy formulation (and its impact on government).
                            </p>
                        </div>

                        <!-- Function 3 -->
                        <div class="strategic-block" style="margin-bottom: 2.5rem;">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Economic and Fiscal Impact of Policy Pronouncements</h4>
                            </div>
                            <p style="margin: 0 0 0 2.2rem; font-size: 0.85rem; line-height: 1.6; color: rgba(255,255,255,0.9);">
                                A number of new policy pronouncements have been made both nationally and within Kaduna state. In many cases, the impacts (economic and fiscal) of the new pronouncements have not been assessed. The EIU will undertake this analysis both ex-ante (to inform policy, particularly in Kaduna State) and ex-poste.
                            </p>
                        </div>
                        
                        <!-- Function 4 -->
                        <div class="strategic-block">
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                                    <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: white; line-height: 1.4;">Ad hoc briefing notes, position papers etc. on emerging issues</h4>
                            </div>
                            <p style="margin: 0 0 0 2.2rem; font-size: 0.85rem; line-height: 1.6; color: rgba(255,255,255,0.9);">
                                Ad hoc briefing notes, position papers etc. on emerging issues – The unit is flexible under other ad hoc analysis that will support effective policy formulation, efficient service delivery and good governance in Kaduna State.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Achievements Detailed Section -->
        <section class="section achievements-section" style="background-color: #f5f8fc; padding: 5rem 0;">
            <div class="container">
                <h2 style="font-size: 2.2rem; font-weight: 800; color: #041f56; margin-bottom: 3rem; letter-spacing: -0.02em;">
                    Achievements of the Unit
                </h2>

                <!-- Item 1 -->
                <div style="margin-bottom: 3rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: #041f56; line-height: 1.4;">1. Learning and Experience Sharing Visit to Lagos State Economic Intelligence Unit</h4>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6; padding-left: 2.2rem;">
                        <p>The learning visit exposed the structures of Lagos State EIU which has been in existence for close to a decade. During the visit, Kaduna State EIU understood the dangers in being under a department; this is because the Lagos State EIU has been subsumed under the planning department. In their ten years of existence, they could not show us any report or product</p>
                        <p>produced by the Unit while the Kaduna State EIU presented twelve reports which was produced within just a year of their establishment. With this achievement, the Lagos State EIU is planning for learning and experience visit to Kaduna State EIU.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div style="margin-bottom: 3rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: #041f56; line-height: 1.4;">2. First Quarter</h4>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6; padding-left: 2.2rem;">
                        <div>
                            <ul style="padding-left: 1.2rem; margin: 0;">
                                <li style="margin-bottom: 0.75rem;"><strong>Macroeconomic Update:</strong> This report seeks to inform policy makers on major happenings internationally, sub-Saharan Africa, Nigeria and in Kaduna State within the 1st quarter.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Consumer Price Index Asymmetries Report:</strong> The report is based on data generated on consumer price index across the state and calculating the changes in inflation rate within the state urban and rural areas. It goes further to compare the inflation rate of Kaduna state with the National figures.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Internally Generated Revenue:</strong> This report seeks to compare internally generated revenue with the present quarter of the year with previous year's quarters to ascertain if Kaduna state is heading towards achieving its yearly target of IGR. It also analysis sector contribution to IGR and see which sector is contributing more and which is lagging behind. This is for policy makers to take decisive</li>
                            </ul>
                        </div>
                        <div>
                            <p style="margin: 0 0 0.75rem 0;">action on sectors that are meant to contribute to its IGR but are not sufficiently contributing enough.</p>
                            <ul style="padding-left: 1.2rem; margin: 0;">
                                <li style="margin-bottom: 0.75rem;"><strong>Budget Performance – Assessing the 60:40 Capital: Recurrent Ratio:</strong> Based on the government budget policy statement that 60% and 40% should go to capital and recurrent respectively. The report established that only on budgeted figures that this statement is followed but in terms of real release of funds, the statement is not followed. EIU tries to advice policy makers to adhere to the budget policy statement when prioritizing release of funds.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Improving Healthcare Delivery Report:</strong> This report is based on the health facility census conducted by Kaduna State Bureau of Statistics. It is a report on how Kaduna State can improve its health sector using the best international standard.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div style="margin-bottom: 3rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: #041f56; line-height: 1.4;">3. Second Quarter</h4>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6; padding-left: 2.2rem;">
                        <div>
                            <ul style="padding-left: 1.2rem; margin: 0;">
                                <li style="margin-bottom: 0.75rem;"><strong>Macroeconomic Update:</strong> This report seeks to inform policy makers on major happenings internationally, sub-Saharan Africa, Nigeria and in Kaduna State within the 2nd quarter.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Consumer Price Index Asymmetries Report:</strong> The report is based on data generated on consumer price index across the state and calculating the changes in inflation rate within the state urban and rural areas. It goes further to compare the inflation rate of Kaduna state with the National figures.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Internally Generated Revenue:</strong> This report seeks to compare internally generated revenue with the present quarter of the year with previous year's quarters to ascertain if Kaduna state is heading towards achieving its yearly target of IGR. It also analysis sector contribution to IGR and see which sector is contributing more and which is lagging behind. This is for policy makers to take decisive action on sectors that are meant to contribute to its IGR but are not sufficiently contributing enough.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Crime and Security in Kaduna State:</strong> The report analyzes the incessant accident along Kaduna – Zaria high way. It identifies some leading causes of accidents and hotspot where accidents are frequent. It also analyzes the impact of road taskforce along the Kaduna – Zaria high way and they were able to mitigate road traffic accidents.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Traffic Road Accidents along Kaduna – Zaria Highway:</strong> The report analyzes the incessant accident along Kaduna – Zaria high way. It identifies some leading causes of accidents and hotspot where</li>
                            </ul>
                        </div>
                        <div>
                            <p style="margin: 0 0 0.75rem 0;">accidents are frequent. It also analyzes the impact of road taskforce along the Kaduna – Zaria high way and they were able to mitigate road traffic accidents.</p>
                            <ul style="padding-left: 1.2rem; margin: 0;">
                                <li style="margin-bottom: 0.75rem;"><strong>Excess Crude Account and Other Special Federation Accounts:</strong> It is a report which tends to analyze the depletion of the excess crude account from more than $20billion in 2007 to less than $700million in 3rd quarter 2019. This report has brought heated debate between state governments in one side and Federal Government and revenue generating agencies in the other side. Federal government are demanding that state governments must pay back the budget support loan facility and salary bailout provided by the Federal government while the state government are arguing that the Federal government and revenue generating agencies must pay back unremitted/under remitted funds into the excess crude account and other special federation accounts.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Two Day Technical Session and Review of Two Reports (Macroeconomic Update and Budget Performance) by DFID-PERL Public Financial Management (PFM) Consultant:</strong> A technical session was organized by DFID-PERL were two of EIU report – Macroeconomic Update and Budget Performance were reviewed by a renowned international consultant. The technical session also helped in building the capacity of EIU staff on report writing and analysis. At the end of the two day technical session which was held in PERL office in Abuja, the two reports were reviewed into a world class or international standard report similar to that of World Bank and IMF.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div style="margin-bottom: 3rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: #041f56; line-height: 1.4;">4. SPSS Training in Zaria</h4>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6; padding-left: 2.2rem;">
                        <p>The training is aimed at strengthening the capacity of EIU`s use of Macroeconomic packages and tools for effective forecast and analysis.</p>
                        <p>During the training staffs of EIU were trained on SPSS statistical package, infographics design and excel spreadsheet.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div style="margin-bottom: 3rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: #041f56; line-height: 1.4;">5. Third Quarter</h4>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6; padding-left: 2.2rem;">
                        <div>
                            <ul style="padding-left: 1.2rem; margin: 0;">
                                <li style="margin-bottom: 0.75rem;"><strong>Macroeconomic Update:</strong> This report seeks to inform policy makers on major happenings internationally, sub-Saharan Africa, Nigeria and in Kaduna State within the 3rd quarter.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Consumer Price Index Asymmetries Report:</strong> The report is based on data generated on consumer price index across the state and calculating the changes in inflation rate within the state urban and rural areas. It goes further to compare the inflation rate of Kaduna state with the National figures.</li>
                                <li style="margin-bottom: 0.75rem;"><strong>Internally Generated Revenue:</strong> This report seeks to compare internally generated revenue with the present quarter of the year with previous year's quarters to ascertain if Kaduna state is heading towards achieving its yearly target of IGR. It also analysis sector</li>
                            </ul>
                        </div>
                        <div>
                            <p style="margin: 0 0 0.75rem 0;">contribution to IGR and see which sector is contributing more and which is lagging behind. This is for policy makers to take decisive action on sectors that are meant to contribute to its IGR but are not sufficiently contributing enough.</p>
                            <ul style="padding-left: 1.2rem; margin: 0;">
                                <li style="margin-bottom: 0.75rem;"><strong>Impact of Petroleum Import Subsidy on the Nigerian Government:</strong> The Nigerian government spends humongous funds averaging a trillion naira in recent years on petroleum import subsidy. This subsidy is only enjoyed by a few wealthy Nigerians and it is enmeshed in corruption. EIU considers the total removal of petroleum import subsidy and channeling the saved funds to invest in human capital development more especially in education and health sectors.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div style="margin-bottom: 3rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: #041f56; line-height: 1.4;">6. Participated in Two Weeks Estimation of Kaduna State Demographic Dividend in Abuja</h4>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6; padding-left: 2.2rem;">
                        <p>The workshop aimed at building evidence and capacity for demographic dividend in Kaduna State. It was also meant to estimate and prepare a draft Demographic Dividend (DD) report for Kaduna State. During the workshop,</p>
                        <p>participants were taking through the use of STATA, R-Project and also how to estimate demographic dividend.</p>
                    </div>
                </div>

                <!-- Item 7 -->
                <div style="margin-bottom: 3rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: #041f56; line-height: 1.4;">7. Analysis of 30,000 Naira Minimum Wage</h4>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6; padding-left: 2.2rem;">
                        <p>The report focuses on and analyze three different scenarios of implementing the new minimum as it affects the personnel cost and revenue of the state. This report was the reason behind Kaduna State</p>
                        <p>Government being the first to implement the N30,000 minimum wage in Nigeria.</p>
                    </div>
                </div>

                <!-- Item 8 -->
                <div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <div class="icon-circle" style="background-color: #FF6B00; color: white; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 0.15rem;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 2px;"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <h4 style="margin: 0; font-size: 1.1rem; font-weight: 700; color: #041f56; line-height: 1.4;">8. Kaduna State Report</h4>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; color: var(--gray-600); font-size: 0.9rem; line-height: 1.6; padding-left: 2.2rem;">
                        <p>The report is a replica of the Economist Intelligence Unit Country report of Great Britain. It is a political and economic analysis and forecast of the upcoming year. It is highly sort after by development partners. It guides</p>
                        <p>them on the possibilities of economic and political happenings in Kaduna State and how they will be able to bring in their funds to support the State.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Partners Section -->
        <section class="section partners-section" id="partners">
            <div class="container fade-up">
                <div class="partners-header">
                    <span class="partners-subtitle">DEVELOPMENT</span>
                    <h2 class="partners-title">Partners</h2>
                </div>
                <div class="partners-marquee-wrapper">
                    <div class="partners-marquee-content">
                        <!-- Set 1 -->
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF">
                        </div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}"
                                alt="Bill & Melinda Gates Foundation"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}"
                                alt="The World Bank"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
                        <!-- Set 2 for seamless scrolling -->
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unicef.png') }}" alt="UNICEF">
                        </div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-unfpa.png') }}" alt="UNFPA"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-gates-foundation.png') }}"
                                alt="Bill & Melinda Gates Foundation"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-world-bank.png') }}"
                                alt="The World Bank"></div>
                        <div class="partner-logo"><img src="{{ asset('assets/images/partners/partner-dfid.jpg') }}" alt="DFID"></div>
                    </div>
                </div>
            </div>
        </section>
@endsection
