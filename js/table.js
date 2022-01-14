document.addEventListener('DOMContentLoaded', () => {
    const cells = document.querySelectorAll('.profile_table_cell')

    for (let i = 1; i < cells.length; i++) {
        let maxWidth = 0
        const cell = document.querySelectorAll(`#${'col' + i}`)
        cell.forEach( ( item, j) => {
            if (maxWidth < item.clientWidth)
                maxWidth = item.clientWidth
        })
        cell.forEach( (item, j) => {
            item.setAttribute('style', `width: ${maxWidth}px`)
        })
    }
})

