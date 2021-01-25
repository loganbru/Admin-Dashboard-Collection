using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Veltrix.Controllers
{
    public class PagesController : Controller
    {
        #region Authentication

        [ActionName("pages-login")]
        public ActionResult pageslogin()
        {
            return View();
        }

        [HttpPost]
        public ActionResult ValidateLogin(string email, string password)
        {
            //You can fetch email and password from db or API here.
            string dbEmail = "Test";
            string dbPassword = "123";
            bool IsValidUser = false;

            if (email == dbEmail && password == dbPassword)
                IsValidUser = true;

            return Json(new
            {
                IsValidUser = IsValidUser
            });
        }

        [ActionName("pages-login-2")]
        public ActionResult pageslogin2()
        {
            return View();
        }

        [ActionName("pages-register")]
        public ActionResult pagesregister()
        {
            return View();
        }

        [ActionName("pages-register-2")]
        public ActionResult pagesregister2()
        {
            return View();
        }

        [ActionName("pages-recoverpw")]
        public ActionResult pagesrecoverpw()
        {
            return View();
        }

        [ActionName("pages-recoverpw-2")]
        public ActionResult pagesrecoverpw2()
        {
            return View();
        }

        [ActionName("pages-lock-screen")]
        public ActionResult pageslockscreen()
        {
            return View();
        }

        [ActionName("pages-lock-screen-2")]
        public ActionResult pageslockscreen2()
        {
            return View();
        }
        #endregion

        #region Extra Pages

        [ActionName("pages-timeline")]
        public ActionResult pagestimeline()
        {
            return View();
        }

        [ActionName("pages-invoice")]
        public ActionResult pagesinvoice()
        {
            return View();
        }

        [ActionName("pages-directory")]
        public ActionResult pagesdirectory()
        {
            return View();
        }

        [ActionName("pages-blank")]
        public ActionResult pagesblank()
        {
            return View();
        }

        [ActionName("pages-404")]
        public ActionResult pages404()
        {
            return View();
        }

        [ActionName("pages-500")]
        public ActionResult pages500()
        {
            return View();
        }

        [ActionName("pages-pricing")]
        public ActionResult pagespricing()
        {
            return View();
        }

        [ActionName("pages-gallery")]
        public ActionResult pagesgallery()
        {
            return View();
        }

        [ActionName("pages-maintenance")]
        public ActionResult pagesmaintenance()
        {
            return View();
        }

        [ActionName("pages-comingsoon")]
        public ActionResult pagescomingsoon()
        {
            return View();
        }

        [ActionName("pages-faq")]
        public ActionResult pagesfaq()
        {
            return View();
        }

        #endregion

    }

}