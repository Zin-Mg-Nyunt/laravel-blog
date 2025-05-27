@props(['blog','commenter','comment'])

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Comment Alert</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f5f5f5; font-family: Arial, sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="padding: 20px 0;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
          <tr style="background-color: #4A90E2;">
            <td style="padding: 20px; text-align: center; color: #ffffff;">
              <h2 style="margin: 0;">💬 New Comment Notification</h2>
            </td>
          </tr>

          <tr>
            <td style="padding: 20px;">
              <p style="font-size: 16px; color: #333333;">
                <strong>🧑‍💬 Commenter:</strong> {{ $commenter->name }}
              </p>

              <p style="font-size: 16px; color: #333333;">
                <strong>📝 Blog Title:</strong> {{ $blog->title }}
              </p>

              <div style="background-color: #f9f9f9; padding: 15px; border-left: 4px solid #4A90E2; margin-top: 15px;">
                <p style="margin: 0; font-size: 15px; color: #555555;">
                  "{{ $comment->body }}"
                </p>
              </div>
            </td>
          </tr>

          <tr style="background-color: #f0f0f0;">
            <td style="text-align: center; padding: 12px; font-size: 12px; color: #999999;">
              © {{ date('Y') }} Your Blog Platform
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
