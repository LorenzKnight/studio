document.addEventListener("DOMContentLoaded", () => {
    const loopsinfo = document.getElementById("loopsinfo")
    loopsinfo.addEventListener("click", definition)
    
})

const textcleaner = li => li.slice(3)

function definition(x) {
    var textcontainer = document.getElementById("definition");
    const tc = textcleaner(x.target.id)
    var children = textcontainer.children
    var siblings = Array.from(children)
    const father = x.target.parentNode
    var son = Array.from(father.children)
    console.log(son)

    son.map((child, index) => {
        if (child.id == x.target.id) {
            father.children[index].style.backgroundColor = "#e9e1e1"
            father.children[index].style.color = "Black"

        } else {
            father.children[index].style.backgroundColor = ""
            father.children[index].style.color = "#999"
        }
    })
    siblings.map((sibling, index) => {
        if (sibling.id == tc) {
            children[index].style.display = "block"
        } else {
            children[index].style.display = "none"
        }
    })
}


/*
DOM elementer
avancerad aÁrray functioner (filter, map, reduce...)
Object.entries
map()
*/