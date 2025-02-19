<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poliform</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="flex fixed w-screen justify-between items-center bg-white px-[2em] py-[.8em] font-poppins z-10">
        <div class="logo text-3xl font-bold">
            Poliform
        </div>
        <div class="navlist flex">
            <ul class="flex gap-5 text-[.9em] font-normal">
                <li><a href="#">Product</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
        </div>
    </nav>

    <section class="w-full h-screen px-[2em] font-poppins">
        <div class="content relative flex justify-center items-center w-full h-full pt-[4em] pb-[1.5em]">
            <img class="w-full h-full rounded-2xl brightness-100" src="{{ asset('storage/image/mainImage.jpg') }}" alt="">
            <div class="absolute text-[7em] font-bold text-white">Contemporary</div>
            <div class="bottom-text absolute flex items-center h-[10.5em] bottom-[3.5em] left-[2.5em] space-x-[1em]">
                <div class="card w-[25em] flex flex-col h-full text-white p-[1em] bg-black bg-opacity-20 backdrop-blur rounded-xl border-solid border-[#c0c0c0] border-[1px]">
                    <p class="text-[.9em]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor assumenda, officia, eius ducimus dolorum incidunt odio maiores veritatis consequuntur iure veniam dolore et sunt.</p>
                    <button class="text-[.8em] mt-[1em] w-fit bg-black px-[1em] py-[.7em] rounded-md">View more <i class="uil uil-arrow-right"></i></button>
                </div>
                <div class="card w-[18em] h-full text-white p-[1em] bg-black bg-opacity-20 backdrop-blur rounded-xl border-solid border-[#c0c0c0] border-[1px]">
                </div>
            </div>
        </div>
    </section>

    <section class="w-full px-[2em] py-10 font-poppins grid grid-flow-row-dense grid-cols-5 grid-rows-2 gap-[1em]">
        <div class="rounded-2xl col-span-4 row-span-2 h-[36em]">
            <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('storage/image/mainImage.jpg') }}" alt="">
        </div>
        <div class="flex flex-col justify-between rounded-2xl h-[17em] bg-[#F0E8E3] p-[1em]">
            <div class="top w-fit border-solid border-black border-[1.5px] px-[1em] py-[.4em] rounded-full">
                <p class="text-[.8em] font-medium">Aesthetic</p>
            </div>
            <div class="middle">
                <p class="text-[.9em] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, molestiae?</p>
            </div>
            <div class="bottom">
                <p class="text-[2em] font-semibold leading-[1.3]">Into a gallery of elegance</p>
            </div>
        </div>
        <div class=" relative rounded-2xl h-[17em] px-[2em] py-10">
            <img class="absolute top-0 left-0 w-full h-full rounded-2xl brightness-80 z-[-1]" src="{{ asset('storage/image/image3.jpg') }}" alt="">
            <div class="text justify-between z-10">
                <div class="top w-fit border-solid border-white text-white border-[1.5px] px-[1em] py-[.4em] rounded-full backdrop-blur-md">
                    <p class="text-[.8em] font-medium">Best Furniture</p>
                </div>
                <div class="middle">
                    <p class="text-[.9em] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, molestiae?
                    </p>
                </div>
                <div class="bottom">
                    <p class="text-[2em] font-semibold leading-[1.3]">Into a gallery of elegance</p>
                </div>
            </div>

        </div>
    </section>
</body>
</html>