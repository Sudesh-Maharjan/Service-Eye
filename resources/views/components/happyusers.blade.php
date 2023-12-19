<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container flex justify-center gap-0">
    <div class="h-[100px] w-[270px] m-5 rounded-3xl flex items-center bg-white p-20 shadow-lg justify-center flex-col">
        <div class="text-3xl">
    {!! $emoji !!}
    </div>
            <div class="so font-bold text-navy-blue text-xl m-2">{{$title}}</div>
            <div id="animated-number-{{$title}}" class="text-3xl font-bold"  data-target="{{$numbers}}"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        animateNumber("animated-number-{{$title}}");
    });

    function animateNumber(elementId) {
        const obj = document.getElementById(elementId);
        const start = 0;
        const end = parseInt(obj.getAttribute('data-target'));
        const duration = 2000;
        const interval = 20;
        const step = (end - start) / (duration / interval);

        let currentNumber = start;

        const updateNumber = () => {
            currentNumber += step;
            if (currentNumber <= end) {
                obj.textContent = Math.round(currentNumber);
                setTimeout(updateNumber, interval);
            } else {
                obj.textContent = end;
            }
        };

        updateNumber();
    }
</script>