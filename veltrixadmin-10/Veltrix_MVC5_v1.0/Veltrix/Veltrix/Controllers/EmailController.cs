using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Veltrix.Controllers
{
    public class EmailController : Controller
    {
        // GET: Email
        
        [ActionName("email-inbox")]
        public ActionResult Inbox()
        {
            return View();
        }

        [ActionName("email-read")]
        public ActionResult Read()
        {
            return View();
        }

        [ActionName("email-compose")]
        public ActionResult Compose()
        {
            return View();
        }
    }
}