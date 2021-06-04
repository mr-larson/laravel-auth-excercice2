@extends('layouts.appFront')

@section('content')

<!--Section Service-->
<div class="py-12">
    <h2 class="bg-blue-200 text-center p-2 mx-10 text-4xl font-bold rounded-lg shadow-lg">Section Service</h2>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-2 bg-yellow-200 rounded shadow-lg mx-auto p-3 w-2/5 mb-4" action="/service" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">title</div>
                    <p class="text-gray-700 text-base">
                        Text
                    </p>
                    <input type="text" class="px-3 py-1 w-full rounded-md" name="title">

                    <p class="text-gray-700 text-base">
                        Icon
                    </p>
                    <select class="custom-select px-3 py-1 w-full rounded-md" name="service_icon">
                        <option selected>choisissez une icone</option>
                        <option value="bx bxl-dribbble">lol <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M14.844 20H6.5C5.121 20 4 18.879 4 17.5S5.121 15 6.5 15h7c1.93 0 3.5-1.57 3.5-3.5S15.43 8 13.5 8H8.639c-.391.771-.868 1.443-1.354 2H13.5c.827 0 1.5.673 1.5 1.5S14.327 13 13.5 13h-7C4.019 13 2 15.019 2 17.5S4.019 22 6.5 22h9.593C15.636 21.422 15.2 20.753 14.844 20zM5 2C3.346 2 2 3.346 2 5c0 3.188 3 5 3 5s3-1.813 3-5C8 3.346 6.654 2 5 2zM5 6.5C4.172 6.5 3.5 5.828 3.5 5S4.172 3.5 5 3.5 6.5 4.172 6.5 5 5.828 6.5 5 6.5z"></path><path d="M19,14c-1.654,0-3,1.346-3,3c0,3.188,3,5,3,5s3-1.813,3-5C22,15.346,20.654,14,19,14z M19,18.5 c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S19.828,18.5,19,18.5z"></path></svg></option> 
                        <option value="bx bxl-dribbble"><i class="bx bx-file"></i></option> 
                        <option value="bx bxl-dribbble"><i class="bx bx-tachometer"></i></option> 
                        <option value="bx bxl-dribbble"><i class="bx bx-layer"></i></option> 
                        <option value="bx bxl-dribbble"><i class="bx bx-slideshow"></i></option> 
                        <option value="bx bxl-dribbble"><i class="bx bx-arch"></i></option> 
                    </select>

                    <p class="text-gray-700 text-base">
                        Shape
                    </p>
                    <select class="custom-select px-3 py-1 w-full rounded-md" name="service_shape">
                        <option selected>choisissez un Shape</option>
                        <option value='<path stroke="none" stroke-width="0"  d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>'>
                            Shape 1
                        </option> 
                       

                        <option value='<path stroke="none" stroke-width="0" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>'>
                            Shape 2
                        </option> 
                        <option value='<path stroke="none" stroke-width="0"  d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>'>
                            Shape 3
                        </option> 
                        <option value='<path stroke="none" stroke-width="0"  d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>'>
                            Shape 4
                        </option> 
                        <option value='<path stroke="none" stroke-width="0"  d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>'>
                            Shape 5
                        </option> 
                        <option value='<path stroke="none" stroke-width="0"  d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>'>
                            Shape 6
                        </option> 

                    </select>
                    
                </div>
                <div class="flex justify-center items-start ">
                    <a href="" class="text-center border-2 border-blue-300 text-blue-300 px-2 rounded-lg m-1 w-auto text-center mb-2 hover:border-blue-500 hover:text-blue-500">Edit</a>
                </div>    
            </div>
        </form>

    </div>
</div>

@endsection
