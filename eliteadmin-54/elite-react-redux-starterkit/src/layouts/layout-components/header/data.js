import user1 from '../../../assets/images/users/1.jpg';
import user2 from '../../../assets/images/users/2.jpg';
import user3 from '../../../assets/images/users/3.jpg';
import user4 from '../../../assets/images/users/4.jpg';

import img1 from '../../../assets/images/big/img1.jpg';
import img2 from '../../../assets/images/big/img2.jpg';
import img3 from '../../../assets/images/big/img3.jpg';

const messages = [
    {
        "id": 1,
        "image": user1,
        "status": "online",
        "title": "Event Today",
        "desc": "Just a reminder of the event.",
        "time": "9:10 PM"
    },
    {
        "id": 2,
        "image": user2,
        "status": "busy",
        "title": "Send Email",
        "desc": "Just send my admin!",
        "time": "9:02 AM"
    },
    {
        "id": 3,
        "image": user3,
        "status": "away",
        "title": "Check Email",
        "desc": "Just check emails for today.",
        "time": "9:02 AM"
    },
    {
        "id": 4,
        "image": user4,
        "status": "offline",
        "title": "Settings",
        "desc": "You can customize this template as you want.",
        "time": "9:08 AM"
    }
];

const notifications = [
    {
        "id": 1,
        "iconclass": "fa fa-link",
        "iconbg": "primary",
        "title": "Launch Admin",
        "desc": "Just see my new admin!",
        "time": "9:30 AM"
    },
    {
        "id": 2,
        "iconclass": "ti-calendar",
        "iconbg": "success",
        "title": "Event Today",
        "desc": "Just a reminder that you have event.",
        "time": "9:10 PM"
    },
    {
        "id": 3,
        "iconclass": "ti-settings",
        "iconbg": "info",
        "title": "Settings",
        "desc": "You can customize this template as you want.",
        "time": "9:08 AM"
    },
    {
        "id": 4,
        "iconclass": "ti-user",
        "iconbg": "primary",
        "title": "Check Email",
        "desc": "Just check my admin!",
        "time": "9:02 AM"
    }
]

/*--------------------------------------------------------------------------------*/
/* For Mega Menu Carousel                                                         */
/*--------------------------------------------------------------------------------*/
const items = [
    {
        src: img1,
        altText: 'Slide 1',
        caption: 'Slide 1'
    },
    {
        src: img2,
        altText: 'Slide 2',
        caption: 'Slide 2'
    },
    {
        src: img3,
        altText: 'Slide 3',
        caption: 'Slide 3'
    }
];

export { messages, notifications, items };