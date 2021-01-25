using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Veltrix.Controllers
{
    public class UIController : Controller
    {
        [ActionName("ui-alerts")]
        public ActionResult uialerts()
        {
            return View();
        }

        [ActionName("ui-buttons")]
        public ActionResult uibuttons()
        {
            return View();
        }

        [ActionName("ui-cards")]
        public ActionResult uicards()
        {
            return View();
        }
        
        [ActionName("ui-carousel")]
        public ActionResult uicarousel()
        {
            return View();
        }
        
        [ActionName("ui-dropdowns")]
        public ActionResult uidropdowns()
        {
            return View();
        }
        
        [ActionName("ui-grid")]
        public ActionResult uigrid()
        {
            return View();
        }
        
        [ActionName("ui-images")]
        public ActionResult uiimages()
        {
            return View();
        }
        
        [ActionName("ui-lightbox")]
        public ActionResult uilightbox()
        {
            return View();
        }
        
        [ActionName("ui-modals")]
        public ActionResult uimodals()
        {
            return View();
        }
        
        [ActionName("ui-rangeslider")]
        public ActionResult uirangeslider()
        {
            return View();
        }
        
        [ActionName("ui-session-timeout")]
        public ActionResult uisessiontimeout()
        {
            return View();
        }

        [ActionName("ui-progressbars")]
        public ActionResult uiprogressbars()
        {
            return View();
        }

        [ActionName("ui-sweet-alert")]
        public ActionResult uisweetalert()
        {
            return View();
        }

        [ActionName("ui-tabs-accordions")]
        public ActionResult uitabsaccordions()
        {
            return View();
        }

        [ActionName("ui-typography")]
        public ActionResult uitypography()
        {
            return View();
        }

        [ActionName("ui-video")]
        public ActionResult uivideo()
        {
            return View();
        }

        [ActionName("ui-general")]
        public ActionResult uigeneral()
        {
            return View();
        }

        [ActionName("ui-colors")]
        public ActionResult uicolors()
        {
            return View();
        }

        [ActionName("ui-rating")]
        public ActionResult uirating()
        {
            return View();
        }
    }
}