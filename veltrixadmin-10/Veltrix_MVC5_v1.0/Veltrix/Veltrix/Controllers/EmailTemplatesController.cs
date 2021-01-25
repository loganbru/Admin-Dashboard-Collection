using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Veltrix.Controllers
{
    public class EmailTemplatesController : Controller
    {
        [ActionName("email-template-basic")]
        public ActionResult emailtemplatebasic()
        {
            return View();
        }
        
        [ActionName("email-template-alert")]
        public ActionResult emailtemplatealert()
        {
            return View();
        }

        [ActionName("email-template-billing")]
        public ActionResult emailtemplatebilling()
        {
            return View();
        }
    }
}