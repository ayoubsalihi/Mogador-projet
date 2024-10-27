var next = document.querySelector('.next')
var previous = document.querySelector('.previous')

next.addEventListener('click',function next() {
    var items = document.querySelectorAll('.item')
    var slide =document.querySelector('.slide')
    slide.append(items[0])
})

previous.addEventListener('click',function previous() {
    var items = document.querySelectorAll('.item')
    var sliide = document.querySelector('.slide')
    sliide.prepend(items[items.length -1])
})
