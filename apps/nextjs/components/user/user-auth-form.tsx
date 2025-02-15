"use client"

import * as React from "react"
import { signIn } from "next-auth/react"

import { cn } from "@/lib/utils"
import { buttonVariants } from "@/components/ui/button"
import { Icons } from "@/components/icons"

interface UserAuthFormProps extends React.HTMLAttributes<HTMLDivElement> {}

export function UserAuthForm({ className, ...props }: UserAuthFormProps) {
  const [isLoading, setIsLoading] = React.useState<boolean>(false)
  const [isGoogleLoading, setIsGoogleLoading] = React.useState<boolean>(false)
  const [isGithubLoading, setIsGithubLoading] = React.useState<boolean>(false)
  const [isEmailLoading, setIsEmailLoading] = React.useState<boolean>(false)
  const [email, setEmail] = React.useState<string>("")

  const handleEmailSignIn = async () => {
    setIsEmailLoading(true)
    setIsLoading(true)
    await signIn("email", { email })
    setIsEmailLoading(false)
    setIsLoading(false)
  }

  return (
    <div className={cn("grid gap-2", className)} {...props}>
          <button
            type="button"
            className={cn(buttonVariants({ variant: "outline" }))}
            onClick={() => {
              setIsGoogleLoading(true)
              setIsLoading(true)
              signIn("google")
            }}
            disabled={isGoogleLoading || isLoading}
          >
            {isGoogleLoading ? (
              <Icons.spinner className="mr-2 h-4 w-4 animate-spin" />
            ) : (
              <Icons.google className="mr-2 h-4 w-4" />
            )}{" "}
            Sign in with Google
          </button>
          <button
            type="button"
            className={cn(buttonVariants({ variant: "outline" }))}
            onClick={() => {
              setIsGithubLoading(true)
              setIsLoading(true)
              signIn("github")
            }}
            disabled={isGithubLoading || isLoading}
          >
            {isGithubLoading ? (
              <Icons.spinner className="mr-2 h-4 w-4 animate-spin" />
            ) : (
              <Icons.github className="mr-2 h-4 w-4" />
            )}{" "}
              Sign in with Github
          </button>
          {/* Email login section */}
          <div id="email-login" className="flex flex-col gap-2">
            <div className="flex items-center">
              <input
                type="email"
                name="email"
                placeholder="Enter your email"
                className="input-class flex-1 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 focus:outline-none rounded-md shadow-sm p-2"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                disabled={isEmailLoading || isLoading}
              />
              <button
                type="button"
                className={cn(buttonVariants({ variant: "outline" }), "ml-2")}
                onClick={handleEmailSignIn}
                disabled={isEmailLoading || isLoading || !email}
              >
                {isEmailLoading ? (
                  <Icons.spinner className="mr-2 h-4 w-4 animate-spin" />
                ) : (
                  "Sign in with Email"
                )}
              </button>
            </div>
          </div>
    </div>
  )
}
