
export default function tabs (){
    let tabsContainers = document.querySelectorAll('[data-tabs]');
    if (tabsContainers.length) {
        tabsContainers.forEach(tabsContainer => {
            let childTabsContainers = tabsContainer.querySelectorAll('[data-tabs]');
            let linkItems = tabsContainer.querySelectorAll('[data-link-trigger]');
            let triggerItems = Array.from(tabsContainer.querySelectorAll('[data-tab-trigger]'));
            let contentItems = Array.from(tabsContainer.querySelectorAll('[data-tab-content]'));
            triggerItems = triggerItems.filter(el => {
                    let flag = true;
                    childTabsContainers.forEach(item => {
                        if(item.contains(el)){
                            flag = false;
                        }
                    })
                    return flag;
                }
            )
            const getContentItem = (id) => {
                if (!id.trim()) return;
                return contentItems.filter(item => item.dataset.tabContent === id);
            }

            const getTriggerItem = (id) => {
                if (!id.trim()) return;
                return triggerItems.filter(item => item.dataset.tabTrigger === id)[0];
            }

            if (triggerItems.length && contentItems.length) {
                if (!(tabsContainer.dataset.tabs === 'not-init')) {
                    triggerItems[0].classList.add('active');
                    getContentItem(triggerItems[0].dataset.tabTrigger).forEach(item => item.classList.add('active'));
                }

                triggerItems.forEach(item => {
                    item.addEventListener('click', () => {
                        tabsContainer.classList.add('tab-checked');
                        item.classList.add('active');
                        getContentItem(item.dataset.tabTrigger).forEach(item => item.classList.add('active'));

                        triggerItems.forEach(i => {
                            if (i === item) return;

                            i.classList.remove('active');
                            getContentItem(i.dataset.tabTrigger).forEach(item => item.classList.remove('active'));
                        })

                        if (item.hasAttribute('data-tab-scroll-to-content')) {
                            let el = getContentItem(item.dataset.tabTrigger);
                            //let header = document.querySelector('[data-header]');
                            if (el) {
                                let top = Math.abs(document.body.getBoundingClientRect().top) + el.getBoundingClientRect().top;
                                window.scrollTo({
                                    top: top - 20,
                                    behavior: 'smooth',
                                })
                            }
                        }
                    })
                })

                linkItems.forEach(item => {
                    item.addEventListener('click', () => {
                        let trigger = getTriggerItem(item.dataset.linkTrigger);
                        if(trigger){
                            trigger.click();
                            let top = Math.abs(document.body.getBoundingClientRect().top) + trigger.getBoundingClientRect().top;

                            window.scrollTo({
                                top: top-250,
                                behavior: 'smooth',
                            })
                        }
                    })
                })
            }
        })
    }
}