"use strict;"

class Menu
{
    constructor()
    {
        this.menus = [];
    }

    index()
    {
        return this.menus;
    }

    show(id)
    {
        return this.menus[id];
    }

    store(company)
    {
        this.menus.push({
            id: $this->menus.length + 1,
            company: company
        });
    }
}

module.exports = {
    Menu: Menu,
};
