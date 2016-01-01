//
//  ViewController.swift
//  Live2Give_actual
//
//  Created by David Gilman on 1/1/16.
//  Copyright © 2016 David Gilman. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet weak var webView: UIWebView!
    var url = "http://www.davidgilman.co/live2give"

    override func viewDidLoad() {
        super.viewDidLoad()
        let urlToLoad = NSURL(string:url)
        let request = NSURLRequest(URL: urlToLoad!)
        webView.loadRequest(request)
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

